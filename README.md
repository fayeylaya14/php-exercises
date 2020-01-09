# php-exercises

**PHP PALINDROME made using PHP: 

1. Create your HTML code first:

````
<form action="" method="post">
        <label for="number"> Enter a Number: <br>
        <input type="text" name="number" id="" required/> <br>
        <button type="submit">Check Number</button>
    </form>
````

2. We will build our php code. But first, we must check if inputted number is not empty:

````
if(isset($_POST['number'])) {
        $getNum = $_POST['number'];
        $output = checkPalindrome($getNum); /*we will write this code later*/
        if($getNum==$output) {
            echo ''.$getNum.' is a palindrome number';
        } else {
            echo 'This is not a palindrome number!';
        }
    } else {
        echo 'No inputted number!';
    }
````
    
3. Now that we have a function code called `checkPalindrome()`, we will now write the codes inside the function:
````
function checkPalindrome($n){
        $num=$n;
        $sum = 0;
        while(floor($num)) {
            $remainder = $num % 10;
            $sum = $sum * 10 + $remainder;
            $num = $num / 10;
        }
        return $sum;
    }
````

**PHP Calculator:

1. Create first your HTML code that inputs 2 numbers and you get to choose which operation you will use:

````
<form method="post">
		<table border="1" align="center">
			<tr>
				<th>Your Result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr>

			<tr>
				<th>Enter your First num</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr>
			<tr>
				<th>Enter your Second num</th>
				<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
				<th>Select Your Choice</th>
				<th>
				<select name="ch">
					<option>+</option>
					<option>-</option>
					<option>*</option>
				</select>
				</th>
			</tr>
			<tr>

				<th colspan="2">
				<input type="submit"
				name="save" value="Show Result"/>
				</th>
			</tr>
		</table>
		</form>
````

2. Build your PHP code using switch case:

````
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$res=$fn+$sn;
		break;
		case '-':
		$res=$fn-$sn;
		break;
		case '*':
		$res=$fn*$sn;
		break;
	}
}

````
 
 **PHP Compute Bill
 
 1. Build HTML code:
 
 ````
 <div id="page-wrap">
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>
	</div>
   ````
   
   2. Let's now write our PHP code:
   
   ````
   $result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
````

3. There is another function called `calculate_bill($units)`. We will use this function to calculate everything

````
function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;
    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}
````
