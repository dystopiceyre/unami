<?php
global $f3;

if(!empty($_POST))
{
    // get data from form

    //add data to hive

    $_SESSION['LongAnswer'] =  new F2FLongAnswers();

    if(validF2FLongAnswersForm())
    {
        if($_POST['goToReview'] == true)
        {
            $f3->reroute('/review');
        }

        $f3->reroute('/not_required');
    }
}

if(!isset($_SESSION['LongAnswer']))
{
    $_SESSION['LongAnswer'] = new F2FLongAnswers();
}


