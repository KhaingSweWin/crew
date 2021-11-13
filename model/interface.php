<?php
	/* Declaration of the interface */
	interface banking {
		public function withdraw($acc, $amount);
		public function deposit($acc, $amount); 
	}
	
	/* Implement the interface */
	class bank_acc implements banking {
		public $ac_no;
		public $balance = 0;
		
		public function __construct($acc, $bal) {
			$this->ac_no = $acc;
			$this->balance = $bal;
			echo "Account Created!";
		}
		
		public function withdraw($acc, $amount) {
			if($this->ac_no == $acc) {
				$this->balance -= $amount;
				echo "<br />Withdrawal successful!";
				echo "<br />Current Balance: ".$this->balance;
			}
			else
				echo "<br />Invalid Account No!";
		}
		
		public function deposit($acc, $amount) {
			if($this->ac_no == $acc) {
				$this->balance += $amount;
				echo "<br />Deposit successful!";
				echo "<br />Current Balance: ".$this->balance;
			}
			else
				echo "<br />Invalid Account No!";
		}
	}
	
	$savings = new bank_acc(1452, 5000.00);
	$savings->withdraw(1452, 2000.00);
	$savings->deposit(1254, 3000.00);
	$savings->deposit(1452,3000.00);
?>