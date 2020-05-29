<?php
global $f3;

if(!empty($_POST))
{
    // get data from form
    $convict = $_POST['convict'];
    $convictText = $_POST['convictText'];
    $trainedText = $_POST['trainedText'];
    $availability = $_POST['availability'];
    $availableTime = $_POST['availableTime'];
    $degreeCompleted = $_POST['degreeCompleted'];
    $volunteerExperience = $_POST['volunteerExperience'];
    $fluentLanguage = $_POST['fluentLanguage'];
    $youngAdult = $_POST['youngAdult'];
    $describes = $_POST['describes'];
    $currentDiagnosis = $_POST['currentDiagnosis'];
    $disclosure = $_POST['disclosure'];
    $outlook = $_POST['outlook'];
    $background = $_POST['background'];
    $presenterText = $_POST['presenterText'];
    $frontLineExperienceText = $_POST['frontLineExperienceText'];
    $supportiveEnvironmentText = $_POST['supportiveEnvironmentText'];
    $recoveryText = $_POST['recoveryText'];

    if ($convict == 'no') {
        $convictText = 'N/A';
    }

    if(!empty($_POST['availability'])) {
        foreach ($_POST['availability'] as $available) {
            echo $available;
        }
        if (!empty($_POST['availableTime'])) {
            foreach ($_POST['availableTime'] as $time) {
                echo $time;
            }
        }
    }

    //add data to hive
    $f3->set('convict', $convict);
    $f3->set('convictText', $convictText);
    $f3->set('trainedText', $trainedText);
    $f3->set('availability', $availability);
    $f3->set('availableTime', $availableTime);
    $f3->set('degreeCompleted', $degreeCompleted);
    $f3->set('volunteerExperience', $volunteerExperience);
    $f3->set('fluentLanguage', $fluentLanguage);
    $f3->set('youngAdult', $youngAdult);
    $f3->set('describes', $describes);
    $f3->set('currentDiagnosis', $currentDiagnosis);
    $f3->set('disclosure', $disclosure);
    $f3->set('outlook', $outlook);
    $f3->set('background', $background);
    $f3->set('presenterText', $presenterText);
    $f3->set('frontLineExperienceText', $frontLineExperienceText);
    $f3->set('supportiveEnvironmentText', $supportiveEnvironmentText);
    $f3->set('recoveryText', $recoveryText);

    $_SESSION['LongAnswer'] =  new PELongAnswers($convict, $convictText, $trainedText, $availability, $availableTime, $degreeCompleted,
        $volunteerExperience, $fluentLanguage, $youngAdult, $describes, $currentDiagnosis, $disclosure, $outlook, $background,
        $presenterText, $frontLineExperienceText, $supportiveEnvironmentText, $recoveryText);

    if(validPELongAnswersForm())
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
    $_SESSION['LongAnswer'] = new PELongAnswers( '', '', '', '', '', '',
    '', '', '', '', '', '', '', '',
    '', '', '', '');
}
