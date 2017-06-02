<?php
	class activities {
		private $id_activity;
		private $title;
		private $start_day;
		private $daylight;
		private $schedule;
		private $instructor;
		private $place;
		private $amount;
		private $p_IVA;
		private $IVA;
		private $total;
		private $payment;
		private $others;
		private $picture;
		
		public function __construct($id_activity, $title, $start_day, $daylight, $schedule,
			$instructor, $place, $amount, $p_IVA, $IVA, $total, $payment, $others, $picture) {
			$this->id_activity = $id_activity;
			$this->title = $title;
			$this->start_day = $start_day;
			$this->daylight = $daylight;
			$this->schedule = $schedule;
			$this->instructor = $instructor;
			$this->place = $place;
			$this->amount = $amount;
			$this->p_IVA = $p_IVA;
			$this->IVA = $IVA;
			$this->total = $total;
			$this->payment = $payment;
			$this->others = $others;
			$this->picture = $picture;
		}

		public function __get($property) {
			if (property_exists($this, $property)) {
				return $this->$property;
			}
		}

		public function __set($property, $value) {
			if (property_exists($this, $property)) {
				$this->$property = $value;
			}
		}

		public function __toString() {
			return "ID Actividad: " . $this->id_activity . "\n" .
					"Titulo: " . $this->title . "\n" .
					"Fecha inicio: " . $this->start_day . "\n" .
					"Fecha fin: " . $this->daylight . "\n" .
					"Horario: " . $this->schedule . "\n" .
					"Profesor: " . $this->instructor . "\n" .
					"Lugar: " . $this->place . "\n" .
					"Importe: " . $this->amount . "\n" .
					"IVA(%): " . $this->p_IVA . "\n" .
					"IVA: " . $this->IVA . "\n" .
					"Total: " . $this->total . "\n" .
					"F. pago: " . $this->payment . "\n" .
					"Otros: " . $this->others;
		}
	}
