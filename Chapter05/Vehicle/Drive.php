<?php

interface Drive{
	public function changeSpeed($speed);
	public function changeGear($gear);
	public function applyBreak();
}