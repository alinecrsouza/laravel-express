<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        
    $posts = [];
    $posts[] = [  'title' => 'R Programming', 'date_creation' =>'2016-07-09', 'author' =>'R Programming', 
                    'content' => "In today's modern business world, it is crucial to understand and analyse 
                        the vast amount of data in a customer database. In order to prevail over this 
                        situation, R programming language provides a solution for analysing the data. 
                        R is a rapidly growing program in its way, is becoming the most used programming
                        language in Statistics and Data Science. By using this language, a business analyst
                        can feel easy to go through entire data and also, it is one of the open source 
                        programming languages. We, at Learn in Space provide the best guidance for R 
                        programming and also we have designed a comprehensive Course, which will guide 
                        you through the basic functionalities of R and help you to get familiar with the 
                        main Data structures. The modules are developed in such a way that you can easily
                        understand without any prior Programming or Statistics knowledge. We will guide you
                        to make you a better analyst, we promote you to reach your dream and career as data 
                        analyst. Experienced professionals will guide you throughout the course. Effective
                        hands-on Training will also be provided as a part of the Course. At the end of the
                        course, you would be able to Create, Manipulate, Analyse and Visualize Datasets and
                        also work your way around R programming.", 'source' => 'http://goo.gl/nHgbHw'];
    $posts[] = [  'title' => 'All you would like to understand concerning web site Designs and Its varieties',
                    'date_creation' =>'2016-07-05', 'author' =>'Ericsen Danny', 
                    'content' => "A starfire web site design ensures that the traveler simply finds the data he
                        came longing for. The planning has to be in such the simplest way that the data is showing
                        emotion appealing, structurally functioning and visually pleasing. Excluding having the
                        ability to satisfy the traveler, the web site design ought to even be equally appealing
                        to go looking engines in order that they rank the web site on high of search results.
                        It's terribly tough to satisfy each human in addition as search engines as each this have
                        totally different necessities. The trick lies in having the ability to integrate the wants
                        of each during a web site design that's approved by humans in addition as search engines.
                        Website designs are of 3 varieties, particularly static, dynamic or CMS and e-commerce 
                        websites. Selecting the sort of Las Vegas Website depends on the sort of business and demand
                        of the business homeowners. Every of those web site designs are engineered on totally different
                        platforms. Scan on to search out additional concerning every form of web site design and also
                        the platforms used.", 'source' => 'http://goo.gl/5dj4la'];            
    $posts[] = [  'title' => "Mobile application development vs. mobile website development! Which's better "
                . "for your online business?", 'date_creation' =>'2016-06-29', 'author' =>'Bindu Dubey', 
                    'content' => "Mobile applications and website might look similar at its first view, but it is you who
                        will decide what will be best for your needs. There are numbers of determining factors such as 
                        availability of budget, target audiences, ultimate purpose and the features which are crucial to
                        accomplishing the business goals successfully. Difference between mobile app and website development:
                        Before evaluating the advantages of mobile website development over mobile app development or vice
                        versa, understanding the difference between these two is crucial. A mobile website is approximately 
                        similar to the desktop website because it will consist of the browser-based HTML pages those are connected.
                        However, the difference lies in the fact that the development of the mobile website is obviously for the 
                        smaller screen size of handy devices and touch-screen interfaces. Moreover, it offers information to the
                        visitors through data, text, images and videos. The developed mobile websites contain mobile-specific 
                        features like location-based mapping or click-to-call.", 'source' => 'http://goo.gl/nHgbHw'];  
        return view('post.index', compact('posts'));
    }
    public function post($key){
        $posts = [];
        $posts[] = [  'title' => 'R Programming', 'date_creation' =>'2016-07-09', 'author' =>'R Programming', 
                    'content' => "In today's modern business world, it is crucial to understand and analyse 
                        the vast amount of data in a customer database. In order to prevail over this 
                        situation, R programming language provides a solution for analysing the data. 
                        R is a rapidly growing program in its way, is becoming the most used programming
                        language in Statistics and Data Science. By using this language, a business analyst
                        can feel easy to go through entire data and also, it is one of the open source 
                        programming languages. We, at Learn in Space provide the best guidance for R 
                        programming and also we have designed a comprehensive Course, which will guide 
                        you through the basic functionalities of R and help you to get familiar with the 
                        main Data structures. The modules are developed in such a way that you can easily
                        understand without any prior Programming or Statistics knowledge. We will guide you
                        to make you a better analyst, we promote you to reach your dream and career as data 
                        analyst. Experienced professionals will guide you throughout the course. Effective
                        hands-on Training will also be provided as a part of the Course. At the end of the
                        course, you would be able to Create, Manipulate, Analyse and Visualize Datasets and
                        also work your way around R programming.", 'source' => 'http://goo.gl/nHgbHw'];
    $posts[] = [  'title' => 'All you would like to understand concerning web site Designs and Its varieties',
                    'date_creation' =>'2016-07-05', 'author' =>'Ericsen Danny', 
                    'content' => "A starfire web site design ensures that the traveler simply finds the data he
                        came longing for. The planning has to be in such the simplest way that the data is showing
                        emotion appealing, structurally functioning and visually pleasing. Excluding having the
                        ability to satisfy the traveler, the web site design ought to even be equally appealing
                        to go looking engines in order that they rank the web site on high of search results.
                        It's terribly tough to satisfy each human in addition as search engines as each this have
                        totally different necessities. The trick lies in having the ability to integrate the wants
                        of each during a web site design that's approved by humans in addition as search engines.
                        Website designs are of 3 varieties, particularly static, dynamic or CMS and e-commerce 
                        websites. Selecting the sort of Las Vegas Website depends on the sort of business and demand
                        of the business homeowners. Every of those web site designs are engineered on totally different
                        platforms. Scan on to search out additional concerning every form of web site design and also
                        the platforms used.", 'source' => 'http://goo.gl/5dj4la'];            
    $posts[] = [  'title' => "Mobile application development vs. mobile website development! Which's better "
                . "for your online business?", 'date_creation' =>'2016-06-29', 'author' =>'Bindu Dubey', 
                    'content' => "Mobile applications and website might look similar at its first view, but it is you who
                        will decide what will be best for your needs. There are numbers of determining factors such as 
                        availability of budget, target audiences, ultimate purpose and the features which are crucial to
                        accomplishing the business goals successfully. Difference between mobile app and website development:
                        Before evaluating the advantages of mobile website development over mobile app development or vice
                        versa, understanding the difference between these two is crucial. A mobile website is approximately 
                        similar to the desktop website because it will consist of the browser-based HTML pages those are connected.
                        However, the difference lies in the fact that the development of the mobile website is obviously for the 
                        smaller screen size of handy devices and touch-screen interfaces. Moreover, it offers information to the
                        visitors through data, text, images and videos. The developed mobile websites contain mobile-specific 
                        features like location-based mapping or click-to-call.", 'source' => 'http://goo.gl/nHgbHw']; 
        
        $post = $posts[$key];        
        return view('post.post', compact('post'));
    }
}
