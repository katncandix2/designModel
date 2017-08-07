<?php

	include 'Shapeinterface.php';

	class Rectangle implements Shape{
		public void draw(){
			echo "Rectangle";
		}
	}

	class Square implements Shape{
		public void draw(){
			echo "Square";
		}
	}

	class Circle implements Shape{
		public void draw(){
			echo "Circle";
		}
	}
