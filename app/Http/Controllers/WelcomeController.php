<?php namespace App\Http\Controllers;


use App\File;
use App\library\VK\groupParse;
use Symfony\Component\Debug\Debug;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $group = new groupParse('-42146176');
        $vk = $group->getVk();
//        $test1 = $vk->getAuthorizeURL('friends,photos,video,pages,offers,questions,wall,groups');
//        print_r($test1);
        //$posts = $group->get();
        print_r($group->getVideoSearch('test'));
 /*       $videos = $group->getVideoSearch('test');
        foreach($videos['response'] as $video){
                    $file = new File();
            $file->url = $video['player'];
            $file->save();

        }*/

        /*foreach($posts['response'] as $post){
            if(isset($post['attachments'])){
                foreach($post['attachments'] as $attachment){
                    if($attachment['type'] == 'video'){
                        $test = $group->getVideo($attachment['video']['vid'],$attachment['video']['owner_id']);
//                        print_r($attachment);
//                        print_r($test);
//                        exit();
                    }
                }
            }
        }*/
//        $test = $group->getVideo(170529895);
//        $test = $group->getVideoSearch('test');
        //print_r($test1);
//        print_r($test);
        $videos = array();

//        <iframe src="http://vk.com/video_ext.php?oid=-31971565&id=171403717" width="607" height="360" frameborder="0"></iframe>

        return view('welcome',array());
	}

}
