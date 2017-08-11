<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateDesignRequest;
use App\Http\Requests\UpdateDesignRequest;
use App\Repositories\DesignRepository;
use App\Repositories\PostRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Spatie\SchemaOrg\Schema;



class HomeController extends AppBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $designRepository;
    private $postRepository;

    public function __construct(DesignRepository $designRepo, PostRepository $postRepo)
    {
        $this->designRepository = $designRepo;
        $this->postRepository = $postRepo;

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = $this->designRepository->all();
        $posts = $this->postRepository->all();

//        $localBusiness = Schema::localBusiness()
//            ->name('orderpearlessence.com')
//            ->email('contact@orderpearlessence.com')
//            ->contactPoint(Schema::contactPoint()->areaServed('Worldwide'))->toScript();

        return view('homepage', compact('designs','posts'));
    }

    public function admin()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function terms()
    {
        return view('terms');
    }

    public function sendrequest(Request $request) {
        $your_email = 'contact@orderpearlessence.com';

        $default_subject = 'From My Contact Form';

        $name_not_specified = 'Please type a valid name';

        $email_was_sent = 'Thanks, your message successfully sent';

        $server_not_configured = 'Sorry, mail server not configured (function "mail()" disabled on your server?)';

        $errors = array();
        if (isset($request->name)) {

            if (!empty($request->name))
                $sender_name =stripslashes(strip_tags(trim($request->name)));

            if (!empty($request->message))
                $message = stripslashes(strip_tags(trim($request->message)));

            if (!empty($request->email))
                $sender_email = stripslashes(strip_tags(trim($request->email)));

            //Message if no sender name was specified
            if (empty($sender_name)) {
                $errors[] = $name_not_specified;
            }

            $from = "MIME-Version: 1.0" . "\r\n";
            $from .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
            $from .= (!empty($sender_email)) ? 'From: ' . $sender_email : '';

            $subject = (!empty($subject)) ? $subject : $default_subject;


            //sending message if no errors
            if (empty($errors)) {

                //duplicating email meta (from and subject) to email message body
                $message_meta = '';
                //From name and email
                $message_meta .= 'From: ' . $sender_name . ' ' . $sender_email . "<br>";
                //Subject or default subject
                $message_meta .= 'Practice Area: ' . ( $subject ? $subject : $default_subject ) . "<br>";

                //adding another CUSTOM contact form fields that added by user to email message body
                foreach ($_POST as $key => $value) {
                    //checking for standard fields
                    if ($key == 'name' || $key == 'message' || $key == 'subject' || $key == 'email') {
                        continue;
                    }
                    //adding key-value pare to email message body
                    $message_meta .= stripslashes(strip_tags(trim($key))) . ': ' . stripslashes(strip_tags(trim($value))) . "<br>";
                }

                $message = $message_meta . "<br>" . 'Message:' . "<br>" . $message;
                $message = wordwrap($message, 70);

                if (mail($your_email, $subject, $message, $from)) {
                    echo $email_was_sent;
                } else {
                    $errors[] = $server_not_configured;
                    echo '<span class="form-errors">' . implode('<br>', $errors) . '</span>';
                }
                dd();
            } else {
                echo '<span class="form-errors">' . implode('<br>', $errors) . '</span>';
            }
        } else {
            // if "name" var not send ('name' attribute of contact form input field was changed or missing)
            echo '"name" variable were not received by server. Please check "name" attributes for your input fields';
        }
    }
}
