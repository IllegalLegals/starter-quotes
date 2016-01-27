<?php


class Bingo extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);

            $authors = array('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what'=>$source['what']);

        $this->data = array_merge($this->data, $authors);

        $this->render();
    }

}

