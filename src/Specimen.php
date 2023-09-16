<?php

namespace TinCat\Evolutive;

class Specimen {
	protected $dna;
	protected $baseDna;

	public function Specimen($dna = false) {
		$this->dna = $dna ? $dna : $this->baseDna;
	}

	public function breed($runParameters = false) {
		$son = 