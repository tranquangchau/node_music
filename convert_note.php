<?php

class convert_node{
	var $string_after;
	//public $string_before;
	function convert_node($string1){
		$this->string_after=$string1;		
	}	
	//dau hoa ban nhac 0#, 7#,ob,7b
	function go_convert_tremolo_vn_tre24(){
		//var_dump($this->string_after);
		$string_before=$this->string_after;
		$string_before = preg_replace('/(?<=\s)1(?=\s)/', '<span class="c1">Sol</span>', $string_before);
		//$string_before = preg_replace('/1(?=\s)/', '<span class="c1">Sol', $string_before);
		//$string_before = preg_replace('/(?<=\s)1/', '<span class="c1">Sol', $string_before);
				
		$string_before = preg_replace('/(?<=\s)2(?=\s)/', '<span class="c2">Rê</span>', $string_before);
		//$string_before = preg_replace('/2(?=\s)/', '<span class="c2">Rê', $string_before);
		//$string_before = preg_replace('/(?<=\s)2/', '<span class="c2">Rê', $string_before);
		
		$string_before = preg_replace('/(?<=\s)3(?=\s)/', '<span class="c3">Đô</span>', $string_before);
		//$string_before = preg_replace('/3(?=\s)/', '<span class="c3">Đô', $string_before);
		$string_before = preg_replace('/(?<=\s)3/', '<span class="c3">Đô', $string_before);
		
		$string_before = preg_replace('/(?<=\s)4(?=\s)/', '<span class="c4">Fa</span>', $string_before);
		//$string_before = preg_replace('/4(?=\s)/', '<span class="c4">Fa', $string_before);
		$string_before = preg_replace('/(?<=\s)4/', '<span class="c4">Fa', $string_before);
		
		$string_before = preg_replace('/(?<=\s)5(?=\s)/', '<span class="c5">Mi</span>', $string_before);
		//$string_before = preg_replace('/5(?=\s)/', '<span class="c5">Mi', $string_before);
		$string_before = preg_replace('/(?<=\s)5/', '<span class="c5">Mi', $string_before);
		
		$string_before = preg_replace('/(?<=\s)6(?=\s)/', '<span class="c6">La</span>', $string_before);
		//$string_before = preg_replace('/6(?=\s)/', '<span class="c6">La', $string_before);
		$string_before = preg_replace('/(?<=\s)6/', '<span class="c6">La', $string_before);
		
		$string_before = preg_replace('/(?<=\s)7(?=\s)/', '<span class="c7">Sol</span>', $string_before);
		//$string_before = preg_replace('/7(?=\s)/', '<span class="c7">Sol', $string_before);
		$string_before = preg_replace('/(?<=\s)7/', '<span class="c7">Sol', $string_before);
		
		$string_before = preg_replace('/(?<=\s)8(?=\s)/', '<span class="c8">Si</span>', $string_before);
		//$string_before = preg_replace('/8(?=\s)/', '<span class="c8">Si</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)8/', '<span class="c8">Si</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)9(?=\s)/', '<span class="c9">Đồ</span>', $string_before);		
		//$string_before = preg_replace('/9(?=\s)/', '<span class="c9">Đồ', $string_before);
		$string_before = preg_replace('/(?<=\s)9/', '<span class="c9">Đồ</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)10(?=\s)/', '<span class="c10">Rê</span>', $string_before);
		$string_before = preg_replace('/10(?=\s)/', '<span class="c10">Rê</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)10/', '<span class="c10">Rê</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)11(?=\s)/', '<span class="c11">Mi</span>', $string_before);
		$string_before = preg_replace('/11(?=\s)/', '<span class="c11">Mi</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)11/', '<span class="c11">Mi</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)12(?=\s)/', '<span class="c12">Fa</span>', $string_before);
		$string_before = preg_replace('/12(?=\s)/', '<span class="c12">Fa</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)12/', '<span class="c12">Fa</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)13(?=\s)/', '<span class="c13">Sol</span>', $string_before);
		$string_before = preg_replace('/13(?=\s)/', '<span class="c13">Sol</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)13/', '<span class="c13">Sol</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)14(?=\s)/', '<span class="c14">La</span>', $string_before);
		$string_before = preg_replace('/14(?=\s)/', '<span class="c14">La</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)14/', '<span class="c14">La</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)15(?=\s)/', '<span class="c15">Đố</span>', $string_before);
		$string_before = preg_replace('/15(?=\s)/', '<span class="c15">Đố</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)15/', '<span class="c15">Đố</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)16(?=\s)/', '<span class="c16">Si</span>', $string_before);	
		$string_before = preg_replace('/16(?=\s)/', '<span class="c16">Si</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)16/', '<span class="c16">Si</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)17(?=\s)/', '<span class="c17">Mí</span>', $string_before);
		$string_before = preg_replace('/17(?=\s)/', '<span class="c17">Mí</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)17/', '<span class="c17">Mí</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)18(?=\s)/', '<span class="c18">Fá</span>', $string_before);
		$string_before = preg_replace('/18(?=\s)/', '<span class="c18">Fá</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)18/', '<span class="c18">Fá</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)19(?=\s)/', '<span class="c19">Sol</span>' , $string_before);
		$string_before = preg_replace('/19(?=\s)/', '<span class="c19">Sol</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)19/', '<span class="c19">Sol</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)20(?=\s)/', '<span class="c20">Fa</span>', $string_before);
		$string_before = preg_replace('/20(?=\s)/', '<span class="c20">Fa</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)20/', '<span class="c20">Fa</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)21(?=\s)/', '<span class="c21">Đô</span>', $string_before);
		$string_before = preg_replace('/21(?=\s)/', '<span class="c21">Đô</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)21/', '<span class="c21">Đô</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)22(?=\s)/', '<span class="c22">La</span>', $string_before);
		$string_before = preg_replace('/22(?=\s)/', '<span class="c22">La</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)22/', '<span class="c22">La</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)23(?=\s)/', '<span class="c23">Mi</span>', $string_before);
		$string_before = preg_replace('/23(?=\s)/', '<span class="c23">Mi</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)23/', '<span class="c23">Mi</span>', $string_before);
		
		$string_before = preg_replace('/(?<=\s)24(?=\s)/', '<span class="c24">Si</span>', $string_before);
		$string_before = preg_replace('/24(?=\s)/', '<span class="c24">Si</span>', $string_before);
		$string_before = preg_replace('/(?<=\s)24/', '<span class="c24">Si</span>', $string_before);
		
		return $string_before;		
	}
	
}