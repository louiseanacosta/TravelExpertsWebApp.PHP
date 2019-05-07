<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This page is for creating objects
 * Author: : Louise Acosta
 * Date: Feb 19, 2019
 * ***********************************************************************/
?>

<?php
	class Person {
		protected $agtFirstName;
		protected $agtMiddleInitial;
		protected $agtLastName;
		protected $agtBusPhone;
        protected $agtEmail;
        protected $agtPosition;
        protected $agencyId;
        protected $agtUsername;
        protected $agtPassword;

        public function __construct(array $arrayData){
            
			if(isset($arrayData['AgtFirstName'])){ $this->agtFirstName = $arrayData['AgtFirstName']; }
			if(isset($arrayData['AgtMiddleInitial'])){ $this->agtMiddleInitial = $arrayData['AgtMiddleInitial']; }
			if(isset($arrayData['AgtLastName'])){ $this->agtLastName = $arrayData['AgtLastName']; }
			if(isset($arrayData['AgtBusPhone'])){ $this->agtBusPhone = $arrayData['AgtBusPhone']; }
            if(isset($arrayData['AgtEmail'])){ $this->agtEmail = $arrayData['AgtEmail']; }
            if(isset($arrayData['AgtPosition'])){ $this->agtPosition = $arrayData['AgtPosition']; }
            if(isset($arrayData['AgencyId'])){ $this->agencyId = $arrayData['AgencyId']; }
            if(isset($arrayData['AgtUsername'])){ $this->agtUsername = $arrayData['AgtUsername']; }
            if(isset($arrayData['AgtPassword'])){ $this->agtPassword = $arrayData['AgtPassword']; }
		}

        public function getAgtFirstName(){ return $this->agtFirstName; }
        public function getAgtMiddleInitial(){ return $this->agtMiddleInitial; }
        public function getAgtLastName(){ return $this->agtLastName; }
        public function getAgtBusPhone(){ return $this->agtBusPhone; }
        public function getAgtEmail(){ return $this->agtEmail; }
        public function getAgtPosition(){ return $this->agtPosition; }
        public function getAgencyId(){ return $this->agencyId; }
        public function getAgtUsername(){ return $this->agtUsername; }
        public function getAgtPassword(){ return $this->agtPassword; }

        public function setAgtFirstName($value){ $this->agtFirstName = $value; }
        public function setAgtMiddleInitial($value){ $this->agtMiddleInitial = $value; }
        public function setAgtLastName($value){ $this->agtLastName = $value; }
        public function setAgtBusPhone($value){ $this->agtBusPhone = $value; }
        public function setAgtEmail($value){ $this->agtEmail = $value; }
        public function setAgtPosition($value){ $this->agtPosition = $value; }
        public function setAgencyId($value){ $this->agencyId = $value; }
        public function setAgtUsername($value){ $this->agtUsername = $value; }
        public function setAgtPassword($value){ $this->agtPassword = $value; }
  
    }
    
    class Agent extends Person{

        public function __toString() {
			return parent::getFullName();
		}
    }

?>