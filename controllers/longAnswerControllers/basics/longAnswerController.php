<?php
global $f3;

if (!empty($POST)) {
    // get data from form
    $convict = $POST['convict'];
    $convictText = $POST['convictText'];
    $takenBasics = $POST['takenBasics'];
    $takenF2F = $POST['takenF2F'];
    $parentMentalChild = $POST['parentMentalChild'];
    $childAge = $POST['childAge'];
    $givenDiagnosis = $POST['givenDiagnosis'];
    $currentDiagnosis = $POST['currentDiagnosis'];
    $lengthOfIllness = $POST['lengthOfIllness'];
    $publicSchool = $POST['publicSchool'];
    $educationalProgram = $POST['educationalProgram'];
    $highSchoolGrad = $POST['highSchoolGrad'];
    $gradDate = $POST['gradDate'];
    $whyBasicsTeacher = $POST['whyBasicsTeacher'];
    $childExperiences = $POST['childExperiences'];
    $coteach = $POST['coteach'];
    $coteachWith = $POST['coteachWith'];
    $knowWhere = $POST['knowWhere'];
    $teachWhere = $POST['teachWhere'];


    if ($convict = 'no') {
        $convictText = 'N/A';
    }

    if ($parentMentalChild = 'no') {
        $childAge = 'N/A';
        $givenDiagnosis = 'N/A';
        $currentDiagnosis = 'N/A';
        $lengthOfIllness = 'N/A';
    }

    if ($publicSchool = 'no') {
        $educationalProgram = 'N/A';
    }

    if ($highSchoolGrad = 'no') {
        $gradDate = 'N/A';
    }

    if ($coteach = 'no') {
        $coteachWith = 'N/A';
    }

    if ($knowWhere = 'no') {
        $teachWhere = 'N/A';
    }

    //add data to hive
    $f3->set('convict', $convict);
    $f3->set('convictText', $convictText);
    $f3->set('takenBasics', $takenBasics);
    $f3->set('takenF2F', $takenF2F);
    $f3->set('parentMentalChild', $parentMentalChild);
    $f3->set('childAge', $childAge);
    $f3->set('givenDiagnosis', $givenDiagnosis);
    $f3->set('currentDiagnosis', $currentDiagnosis);
    $f3->set('lengthOfIllness', $lengthOfIllness);
    $f3->set('publicSchool', $publicSchool);
    $f3->set('educationalProgram', $educationalProgram);
    $f3->set('highSchoolGrad', $highSchoolGrad);
    $f3->set('gradDate', $gradDate);
    $f3->set('whyBasicsTeacher', $whyBasicsTeacher);
    $f3->set('childExperiences', $childExperiences);
    $f3->set('coteach', $coteach);
    $f3->set('knowWhere', $knowWhere);
    $f3->set('teachWhere', $teachWhere);

    $SESSION['LongAnswer'] = new BLongAnswers($convict, $convictText, $takenBasics, $takenF2F, $parentMentalChild, $childAge,
        $givenDiagnosis, $currentDiagnosis, $lengthOfIllness, $publicSchool, $educationalProgram, $highSchoolGrad,
        $gradDate, $whyBasicsTeacher, $childExperiences, $coteach, $coteachWith, $knowWhere, $teachWhere);

    if (validBLongAnswersForm()) {
        if ($POST['goToReview'] == true) {
            $f3->reroute('/review');
        }

        $f3->reroute('/not_required');
    }
}

if (!isset($SESSION['LongAnswer'])) {
    $SESSION['LongAnswer'] = new BLongAnswers();
}
