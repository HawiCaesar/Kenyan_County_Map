<?php 


$a = array(
			array(

				'name' => '< 25%',
				'color' => '#D54339',
				'data' => array(
								array('value' => 45,'code' => 'Mand'),
								array('value' => 55,'code' => 'Momb'),
								array('value' => 65,'code' => 'Gari'),
								array('value' => 75,'code' => 'Turk')
							)
				),
			array(

				'name' => '>= 26% < 50%',
				'color' => '#495136',
				'data' => array(
								array('value' => 45,'code' => 'Nyer'),
								array('value' => 55,'code' => 'Bari'),
								array('value' => 65,'code' => 'Thar'),
								array('value' => 75,'code' => 'Uasi'),
								array('value' => 25,'code' => 'Nand')
								)
				),
			array(

				'name' => '>= 51% < 75%',
				'color' => '#2372b2',
				'data' => array(
								array('value' => 45,'code' => 'Mars'),
								array('value' => 55,'code' => 'Keri'),
								array('value' => 65,'code' => 'Laik'),
								array('value' => 75,'code' => 'Lamu')
								)
				),
			array(

				'name' => '>= 75% < 100%',
				'color' => '#c65b08',
				'data' => array(
								array('value' => 45,'code' => 'Busi'),
								array('value' => 55,'code' => 'Siay'),
								array('value' => 65,'code' => 'Kisu'),
								array('value' => 75,'code' => 'Vihi'),
								array('value' => 75,'code' => 'Elge'),
								array('value' => 75,'code' => 'Nyam'),
								array('value' => 75,'code' => 'Kisi'),
								array('value' => 75,'code' => 'Mura'),
								array('value' => 75,'code' => 'Kiri'),
								array('value' => 75,'code' => 'Kiam'),
								array('value' => 75,'code' => 'Nair'),
								array('value' => 75,'code' => 'Nyan'),
								array('value' => 75,'code' => 'Tana'),
								array('value' => 75,'code' => 'Kili'),
								array('value' => 75,'code' => 'Kwal'),
								array('value' => 75,'code' => 'Maku'),
								array('value' => 75,'code' => 'Tait'),
								array('value' => 75,'code' => 'Kaji'),
								array('value' => 75,'code' => 'Kitu'),
								array('value' => 75,'code' => 'Meru'),
								array('value' => 75,'code' => 'Emb'),
								array('value' => 75,'code' => 'Mach'),
								array('value' => 75,'code' => 'Naro'),
								array('value' => 75,'code' => 'Migo'),
								array('value' => 75,'code' => 'Naku'),
								array('value' => 75,'code' => 'Bome'),
								array('value' => 75,'code' => 'West'),
								array('value' => 75,'code' => 'Samb'),
								array('value' => 75,'code' => 'Tran'),
								array('value' => 75,'code' => 'Bung'),
								array('value' => 75,'code' => 'Kaka'),
								array('value' => 75,'code' => 'Waji'),
								array('value' => 75,'code' => 'Waji'),
								array('value' => 75,'code' => 'Isio')
								)
				)
		);

// echo "<pre>";
// print_r($a);
// echo "</pre>";
echo json_encode($a);

?>