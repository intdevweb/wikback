<?php
namespace Manager;
class TermManager extends \W\Manager\Manager
{
	public function getCurrentWordOfTheDay(){
		
		$sql= "SELECT * FROM $this->table WHERE is_wotd = 1";
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetch();
	}
}