<?php

namespace TinCat\Evolutive;

class Specimen {
	protected $dna;
	protected $baseDna;

	public function Specimen($dna = false) {
		$this->dna = $dna ? $dna : $this->baseDna;
	}

	public function breed($runParameters = false) {
		$son = clone $this;
		$son->alterMutagen();
		$son->mutate();
		$son->run($runParameters);
		return $son;
	}

	public function __clone() {
		$this->dna = clone $this->dna;
	}

	public function mutate() {
		$this->getDna()->mutate();
	}

	public function alterMutagen() {
		$this->GetDna()->alterMutagen();
	}

	public function getDna() {
		return $this->dna;
	}

	// Executes any