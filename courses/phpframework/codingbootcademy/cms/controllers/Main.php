<?php
/**
 * @project: git-playground
 * @author: alexjorj
 * Date: 4/26/21
 * Time: 9:52 AM
 */

namespace codingbootcademy\cms\controllers;


class Main extends AbstractController
{
    public function index()
    {
        $content = "this is some content";
//        include dirname(__FILE__) . '/../templates/index.html';
        $this->render('index.html', [
            'content' => $content
        ]);
    }

    public function install()
    {
        $this->dbservice->install();
        $this->dbservice->savePage("About us",'aboutus', 'Welcome to our site');

//        include dirname(__FILE__) . '/../templates/index.html';
        $this->render('install.html', [
            'content' => 'Installation successfull'
        ]);
    }

    public function anotherTest()
    {
        $content = "this is another content";
        include dirname(__FILE__) . '/../templates/anotherTest.html';
    }

    public function aboutUs()
    {
        $row = $this->dbservice->readPage('aboutus');
        $content = $row['content'];
//        include dirname(__FILE__) . '/../templates/aboutUs.html';
        $this->render('aboutUs.html', [
            'content' => $content
        ]);
    }

    public function contact()
    {
        $content = '';
        if(isset($_POST['submit'])) {
            mail("iordachej@gmail.com", "Contact request", "From: " . $_POST['yourname'] . "\n\nComments:\n" . $_POST['comments'] );
            $content = "Message sent successfully";
        }
//        include dirname(__FILE__) . '/../templates/anotherTest.html';
        $this->render('contact.html', [
            'content' => $content
        ]);
    }
}
