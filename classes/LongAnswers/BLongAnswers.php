<?php

/**
 * Class BLongAnswers
 */
class BLongAnswers
{
    private $_convict;
    private $_convictText;
    private $takenBasics;
    private $takenF2F;
    private $parent;
    private $childAge;
    private $givenDiagnosis;
    private $currentDiagnosis;
    private $lengthOfIllness;
    private $publicSchool;
    private $educationalProgram;
    private $highSchoolGrad;
    private $gradDate;
    private $whyBasicsTeacher;
    private $childExperiences;
    private $coteach;
    private $coteachWith;
    private $knowWhere;
    private $teachWhere;

    /**
     * BLongAnswers constructor.
     * @param $_convict
     * @param $_convictText
     * @param $_takenBasics
     * @param $_takenF2F
     * @param $_parent
     * @param $_childAge
     * @param $_givenDiagnosis
     * @param $_currentDiagnosis
     * @param $_lengthOfIllness
     * @param $_publicSchool
     * @param $_educationalProgram
     * @param $_highSchoolGrad
     * @param $_gradDate
     * @param $_whyBasicsTeacher
     * @param $_childExperiences
     * @param $_coteach
     * @param $_coteachWith
     * @param $_knowWhere
     * @param $_teachWhere
     */
    public function __construct($_convict, $_convictText, $_takenBasics, $_takenF2F, $_parent, $_childAge, $_givenDiagnosis,
                                $_currentDiagnosis, $_lengthOfIllness, $_publicSchool, $_educationalProgram,
                                $_highSchoolGrad, $_gradDate, $_whyBasicsTeacher, $_childExperiences, $_coteach,
                                $_coteachWith, $_knowWhere, $_teachWhere)
    {
        $this->_convict = $_convict;
        $this->_convictText = $_convictText;
        $this->takenBasics = $_takenBasics;
        $this->takenF2F = $_takenF2F;
        $this->parent = $_parent;
        $this->childAge = $_childAge;
        $this->givenDiagnosis = $_givenDiagnosis;
        $this->currentDiagnosis = $_currentDiagnosis;
        $this->lengthOfIllness = $_lengthOfIllness;
        $this->publicSchool = $_publicSchool;
        $this->educationalProgram = $_educationalProgram;
        $this->highSchoolGrad = $_highSchoolGrad;
        $this->gradDate = $_gradDate;
        $this->whyBasicsTeacher = $_whyBasicsTeacher;
        $this->childExperiences = $_childExperiences;
        $this->coteach = $_coteach;
        $this->coteachWith = $_coteachWith;
        $this->knowWhere = $_knowWhere;
        $this->teachWhere = $_teachWhere;
    }

    /**
     * @return mixed
     */
    public function getTakenBasics()
    {
        return $this->takenBasics;
    }

    /**
     * @return mixed
     */
    public function getTakenF2F()
    {
        return $this->takenF2F;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return mixed
     */
    public function getChildAge()
    {
        return $this->childAge;
    }

    /**
     * @return mixed
     */
    public function getGivenDiagnosis()
    {
        return $this->givenDiagnosis;
    }

    /**
     * @return mixed
     */
    public function getCurrentDiagnosis()
    {
        return $this->currentDiagnosis;
    }

    /**
     * @return mixed
     */
    public function getPublicSchool()
    {
        return $this->publicSchool;
    }

    /**
     * @return mixed
     */
    public function getLengthOfIllness()
    {
        return $this->lengthOfIllness;
    }

    /**
     * @return mixed
     */
    public function getEducationalProgram()
    {
        return $this->educationalProgram;
    }

    /**
     * @return mixed
     */
    public function getHighSchoolGrad()
    {
        return $this->highSchoolGrad;
    }

    /**
     * @return mixed
     */
    public function getGradDate()
    {
        return $this->gradDate;
    }

    /**
     * @return mixed
     */
    public function getWhyBasicsTeacher()
    {
        return $this->whyBasicsTeacher;
    }

    /**
     * @return mixed
     */
    public function getChildExperiences()
    {
        return $this->childExperiences;
    }

    /**
     * @return mixed
     */
    public function getCoteach()
    {
        return $this->coteach;
    }

    /**
     * @return mixed
     */
    public function getCoteachWith()
    {
        return $this->coteachWith;
    }

    /**
     * @return mixed
     */
    public function getKnowWhere()
    {
        return $this->knowWhere;
    }

    /**
     * @return mixed
     */
    public function getTeachWhere()
    {
        return $this->teachWhere;
    }

    /**
     * @return mixed
     */
    public function getConvict()
    {
        return $this->_convict;
    }

    /**
     * @return mixed
     */
    public function getConvictText()
    {
        return $this->_convictText;
    }

}