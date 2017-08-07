<?php
	include 'ShapeEntity.php';
	class ShapeFactory{

		public getShape($Type){
			if($Type=='Rectangle'){
				return new Rectangle();
			}

			if($Type=='Square'){
				return new Square();
			}	

			if($Type=='Circle'){
				return new Circle();
			}
		}
	}