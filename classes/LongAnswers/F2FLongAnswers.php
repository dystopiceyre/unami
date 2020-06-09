<?php

/*
 * Placeholder for Family-To-Family training long answers
 */
class F2FLongAnswers
{

    private $_convict;
    private $_convictText;
    private $_firstDegreeFamily;
    private $_relative;
    private $_diagnosis;
    private $_takenF2F;
    private $_whyF2FTeacher;
    private $_coTeach;
    private $_coTeachWith;
    private $_knowWhere;
    private $_teachWhere;


    /**
     * F2FLongAnswers constructor.
     * @param $_convict
     * @param $_convictText
     * @param $_firstDegreeFamily
     * @param $_relative
     * @param $_diagnosis
     * @param $_takenF2F
     * @param $_whyF2FTeacher
     * @param $_coTeach
     * @param $_coTeachWith
     * @param $_knowWhere
     * @param $_teachWhere
     */
    public function __construct($_convict, $_convictText, $_firstDegreeFamily, $_relative, $_diagnosis, $_takenF2F, $_whyF2FTeacher,
                                $_coTeach, $_coTeachWith, $_knowWhere, $_teachWhere)
    {

        $this->_convict = $_convict;
        $this->_convictText = $_convictText;
        $this->_firstDegreeFamily = $_firstDegreeFamily;
        $this->_relative = $_relative;
        $this->_diagnosis = $_diagnosis;
        $this->_takenF2F = $_takenF2F;
        $this->_whyF2FTeacher = $_whyF2FTeacher;
        $this->_coTeach = $_coTeach;
        $this->_coTeachWith = $_coTeachWith;
        $this->_knowWhere = $_knowWhere;
        $this->_teachWhere = $_teachWhere;
    }

    /**
     * @return mixed
     */
    public function getConvict()
    {
        return $this->_convict;
    }

    /**
     * @param mixed $convict
     */
    public function setConvict($convict)
    {
        $this->_convict = $convict;
    }

    /**
     * @return mixed
     */
    public function getConvictText()
    {
        return $this->_convictText;
    }

    /**
     * @param mixed $convictText
     */
    public function setConvictText($convictText)
    {
        $this->_convictText = $convictText;
    }

    /**
     * @return mixed
     */
    public function getFirstDegreeFamily()
    {
        return $this->_firstDegreeFamily;
    }

    /**
     * @param mixed $firstDegreeFamily
     */
    public function setFirstDegreeFamily($firstDegreeFamily)
    {
        $this->_firstDegreeFamily = $firstDegreeFamily;
    }

    /**
     * @return mixed
     */
    public function getRelative()
    {
        return $this->_relative;
    }

    /**
     * @param mixed $relative
     */
    public function setRelative($relative)
    {
        $this->_relative = $relative;
    }

    /**
     * @return mixed
     */
    public function getDiagnosis()
    {
        return $this->_diagnosis;
    }

    /**
     * @param mixed $diagnosis
     */
    public function setDiagnosis($diagnosis)
    {
        $this->_diagnosis = $diagnosis;
    }

    /**
     * @return mixed
     */
    public function getTakenF2F()
    {
        return $this->_takenF2F;
    }

    /**
     * @param mixed $takenF2F
     */
    public function setTakenF2F($takenF2F)
    {
        $this->_takenF2F = $takenF2F;
    }

    /**
     * @return mixed
     */
    public function getWhyF2FTeacher()
    {
        return $this->_whyF2FTeacher;
    }

    /**
     * @param mixed $whyF2FTeacher
     */
    public function setWhyF2FTeacher($whyF2FTeacher)
    {
        $this->_whyF2FTeacher = $whyF2FTeacher;
    }

    /**
     * @return mixed
     */
    public function getCoTeach()
    {
        return $this->_coTeach;
    }

    /**
     * @param mixed $coTeach
     */
    public function setCoTeach($coTeach)
    {
        $this->_coTeach = $coTeach;
    }

    /**
     * @return mixed
     */
    public function getCoTeachWith()
    {
        return $this->_coTeachWith;
    }

    /**
     * @param mixed $coTeachWith
     */
    public function setCoTeachWith($coTeachWith)
    {
        $this->_coTeachWith = $coTeachWith;
    }

    /**
     * @return mixed
     */
    public function getKnowWhere()
    {
        return $this->_knowWhere;
    }

    /**
     * @param mixed $knowWhere
     */
    public function setKnowWhere($knowWhere)
    {
        $this->_knowWhere = $knowWhere;
    }

    /**
     * @return mixed
     */
    public function getTeachWhere()
    {
        return $this->_teachWhere;
    }

    /**
     * @param mixed $teachWhere
     */
    public function setTeachWhere($teachWhere)
    {
        $this->_teachWhere = $teachWhere;
    }

}