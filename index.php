<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['age'])&&!empty($_POST['height'])&&!empty($_POST['weight'])){
        $age = $_POST['age'];
        $height = $_POST['height'];
        $sex = $_POST['gender'];
        $height_m = $height/100;
        $weight = $_POST['weight'];
        $bmi_test = $weight / ($height_m * $height_m);
        $bmi = round($bmi_test,1);
        $rotate = -90 + $bmi;
    }
   
}
error_reporting(E_ERROR | E_PARSE);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <main>
        <div class="basic">
            <div class="test">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <h1>BMI Calculator</h1>
                <label for="age">Age:</label>
                <input type="text" name="age" id="age" placeholder="Enter your age">
                <br>

                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>
                

                <label for="height">Height: [cm]</label>
                <input type="text" name="height" id="height" placeholder="Enter your height"><br>

                <label for="weight">Weight: [kg]</label>
                <input type="text" name="weight" id="weight" placeholder="Enter your weight"><br>

                <button type="submit" value="calculate">Calculate</button>
            </form>
            <?php
            if(empty($bmi)){
                echo 
                '<div class="results">
                <p>Your results will be shown here.</p>
                <p>You need to fill out all parameters.</p>
                </div>
                ';
            }
            if($sex == 'female' || $sex == 'male'){
                if($bmi <= 16){
                    echo 
                    '<div class="results">
                    <p><strong>Your BMI is '.$bmi.' kg/m<sup>2<sup></span></strong></p>
                    <p>You are Underweight</p>
                    <p><span class = "span1">(Severe Thinness)</span></p>
                    </div>';
                
                }
                elseif($bmi > 16 && $bmi <= 17){
                    echo 
                    '<div class="results">
                    <p><strong>Your BMI is '.$bmi.' kg/m<sup>2<sup></span></strong></p>
                    <p>You are Underweight</p>
                    <p><span class = "span1">(Moderate Thinness)</span></p>
                    </div>';
                }
                elseif($bmi > 17 && $bmi <= 18.5){
                    echo 
                    '<div class="results">
                    <p><strong>Your BMI is '.$bmi.' kg/m<sup>2<sup></span></strong></p>
                    <p>You are Underweight</p>
                    <p><span class = "span1">(Mild Thinness)</span></p>
                    </div>';
                }
                elseif($bmi > 18.5 && $bmi <= 25){
                    echo 
                    '<div class="results">
                    <p><strong>Your BMI is '.$bmi.' kg/m<sup>2<sup></span></strong></p>
                    <p><span class = "span2">You are Normal</span></p>
                    </div>';
                }
                elseif($bmi > 25 && $bmi <= 30){
                    echo 
                    '<div class="results">
                    <p><strong>Your BMI is '.$bmi.' kg/m<sup>2<sup></span></strong></p>
                    <p><span class = "span3">You are Overweight</span></p>
                    </div>';
                }
                elseif($bmi > 30 && $bmi <= 35){
                    echo 
                    '<div class="results">
                    <p><strong>Your BMI is '.$bmi.' kg/m<sup>2<sup></span></strong></p>
                    <p>You are Obese</p>
                    <p><span class = "span4">(Obese Class I)</span></p>
                    </div>';  
                }
                elseif($bmi > 35 && $bmi <= 40){
                    echo 
                    '<div class="results">
                    <p><strong>Your BMI is '.$bmi.' kg/m<sup>2<sup></span></strong></p>
                    <p>You are Obese</p>
                    <p><span class = "span4">(Obese Class II)</span></p>
                    </div>';  
                }
                else{
                    echo 
                    '<div class="results">
                    <p><strong>Your BMI is '.$bmi.' kg/m<sup>2<sup></span></strong></p>
                    <p>You are Extremely Obese</p>
                    <p><span class = "span5">(Obese Class III)</span></p>
                    </div>';  
                }
            }
            ?>
            
            </div>
            

            
            <?php
            if(empty($bmi)){
                echo('<img src="img/empty.png" alt="dwdw" id="nigga" width="200px">');
                
            }
            if($sex == 'female' ){
                if($bmi <= 18.5){
                    echo('<img src="img/f_under.jpg" alt="dwdw" id="nigga" width="200px">');
                }
                elseif($bmi > 18.5 && $bmi <= 25){
                    echo('<img src="img/f_normal.jpg" alt="dwdw" id="nigga" width="200px">');
                }
                elseif($bmi > 25 && $bmi <= 30){
                    echo('<img src="img/f_over.jpg" alt="dwdw" id="nigga" width="200px">');
                }
                elseif($bmi > 30 && $bmi <= 40){
                    echo('<img src="img/f_obese.jpg" alt="dwdw" id="nigga" width="200px">');
                }
                else{
                    echo('<img src="img/f_extra.jpg" alt="dwdw" id="nigga" width="200px">');
                }
            }
            elseif($sex == 'male'){
                if($bmi <= 18.5){
                    echo('<img src="img/m_under.jpg" alt="dwdw" id="nigga" width="200px">');
                }
                elseif($bmi > 18.5 && $bmi <= 25){
                    echo('<img src="img/m_normal.jpg" alt="dwdw" id="nigga" width="200px">');
                }
                elseif($bmi > 25 && $bmi <= 30){
                    echo('<img src="img/m_over.jpg" alt="dwdw" id="nigga" width="200px">');
                }
                elseif($bmi > 30 && $bmi <= 40){
                    echo('<img src="img/m_obese.jpg" alt="dwdw" id="nigga" width="200px">');
                }
                else{
                    echo('<img src="img/m_extra.jpg" alt="dwdw" id="nigga" width="200px">');
                }
            }
            ?>

            <p>
            <strong>The Body Mass Index (BMI) Calculator</strong> can be used to calculate BMI value and corresponding weight status while taking age into consideration.<br><br>
            BMI is a measurement of a person's leanness based on their height and weight, and is intended to quantify tissue mass. It is widely used as a general indicator of whether a person has a healthy body weight for their height.<br><br>
            The value obtained from the calculation of BMI is used to categorize whether a person is underweight, normal weight, overweight, or obese depending on what range the value falls between. 
            
            </p>

            
        
        </div>
        <img src="img/skala.png" alt="scale" id="scale"><br>
        <style>
            #scale{
                position: relative;
                bottom: 1rem;
            }
        </style>
        <?php
        if(empty($bmi)){
            echo('<style>
                #scale{
                position: relative;
                bottom: 8rem;
                }</style>');
        }
        elseif($bmi <= 18.5){
            echo('<style>
                #scale{
                position: relative;
                bottom: 3rem;
                }</style>');
            echo('<img src="img/point.png" alt="point" id="point">');
            echo(
                '<style>
                #point{
                width: 40px;
                position: relative;
                bottom: 8rem;
                left:9rem;
                transform: rotate(-65deg);
                transition: 0.4s;
                }</style>
            ');
            
            
            
        }
        elseif($bmi > 18.5 && $bmi <= 25){
            echo('<style>
                #scale{
                position: relative;
                bottom: 7rem;
                }</style>');
        }
        elseif($bmi > 25 && $bmi <= 30){
            echo('<style>
                #scale{
                position: relative;
                bottom: 3rem;
                }</style>');
        }
        elseif($bmi > 30 && $bmi <= 40){
            echo('<style>
                #scale{
                position: relative;
                bottom: 5rem;
                }</style>');
        }
        else{
            echo('<style>
                #scale{
                position: relative;
                bottom: 0rem;
                }</style>');
        }
        
        
        
            
        

        ?>
        
    





    </main>
</body>

</html>


