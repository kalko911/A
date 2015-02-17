<?php
namespace App\library\VK {
    class groupParse
    {
        protected $groupId;
        protected $offset = 0;
        protected $count = 100;
        protected $vk;

        protected $apiKey = '4787805';//'4657346';
        protected $secretKey = '7cELJh96hxrpWpOPfijO';//'XcskYhqOJ0IPwmeGo8F1';
        protected $token = '72512915314b6238457aed8d874db3d2ad1872c7dcf9af0b87cb03401e4cee1d6278ab4db9f05d0d85195';//'9ee549a36b27067e21ee95f45643090111dc583a8472cf7b8cd97d779783e39f2845fd7521ed88a18c9e6';

        /**
         * @return mixed
         */
        public function getGroupId()
        {
            return $this->groupId;
        }

        /**
         * @param mixed $groupId
         */
        public function setGroupId($groupId)
        {
            $this->groupId = $groupId;
        }

        /**
         * @return mixed
         */
        public function getVk()
        {
            return $this->vk;
        }

        /**
         * @param mixed $vk
         */
        public function setVk($vk)
        {
            $this->vk = $vk;
        }

        /**
         * @return int
         */
        public function getCount()
        {
            return $this->count;
        }

        /**
         * @param int $count
         */
        public function setCount($count)
        {
            $this->count = $count;
        }

        /**
         * @return int
         */
        public function getOffset()
        {
            return $this->offset;
        }

        /**
         * @param int $offset
         */
        public function setOffset($offset)
        {
            $this->offset = $offset;
        }


        public function __construct($groupId)
        {
            $this->setGroupId($groupId);
            $this->setVk(new VK($this->apiKey, $this->secretKey,$this->token));
        }

        public function get()
        {
            return $this->getVk()->api('wall.get', array(
                'owner_id' => $this->getGroupId(),
                'count' => $this->getCount(),
                'offset' => $this->getOffset(),
            ));
        }

        public function getVideo($id,$owner=null){
            $owner = ($owner==null)?$this->getGroupId():$owner;
            return $this->getVk()->api('video.get', array(
                'videos' => $owner.'_'.$id,
            ));

        }

        public function getVideoSearch($q){
            return $this->getVk()->api('video.search', array(
                'q' => $q,
                'adult'=>0,
            ));

        }

        public function getNext()
        {
            $this->setOffset($this->getCount());
            return $this->get();
        }


    }
}