<?php

	/**
	 * Example of Evolutive https://github.com/tin-cat/evolutive, A library to learn about simple evolutive, genetics-based machine learning algorithms and object-oriented programming by Tin.cat
	 * Using an evolutive, genetics-based machine learning algorithm to find the two sumands that give a specific result.
	 */

	header("Content-type: text/plain; charset=utf-8");
	include "../evolutive.class.php";

	class FindSummandsSpecimen extends Evolutive\Specimen {
		public $desiredResult = 10;
		public $result;
		
		public function FindSummandsSpecimen($dna = false) {
			$this->baseDna = new Evolutive\Dna([
				"summandA" => new Evolutive\Gene(),
				"summandB" => new Evolutive\Gene(),
			]);
			parent::Specimen($dna);
		}

		public function run($parameters) {
			$this->result = $this->getDna()->getGene("summandA")->getValue() + $this->getDna()->getGene("summandB")->getValue();
		}

		public function getFitness() {
			if ($this->desiredResult > $this->result)
				$delta = $this->desiredResult - $this->result;
			else
				$delta = $this->result - $this->desiredResult;
			return $this-