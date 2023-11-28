<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/FAQ.css">

</head>
<body>

<div class="container">

    <h1 class="heading">FAQ | HEALTH MATE PRO</h1>

    <div class="accordion-container">

        <div class="accordion active">
            <div class="accordion-heading">
                <h3>What is a diet plan?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            A diet plan is a structured eating regimen designed to meet specific health or fitness goals. It typically includes details about the types and quantities of food to consume. </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>How can I create a personalized diet plan?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            A personalized diet plan is usually created with the help of a registered dietitian or nutritionist who considers your specific needs, goals, and dietary preferences. </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>What is a health checkup system?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            A health checkup system is a set of medical tests and examinations that are conducted to assess your overall health and detect any potential health issues.  </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>How often should I get a health checkup?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            The frequency of health checkups depends on your age, gender, and risk factors. Your healthcare provider can provide guidance on the recommended schedule. </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>How can I prepare for a diet plan?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            To prepare for a diet plan, start by setting clear health or fitness goals. Make a list of foods you like and dislike, and be prepared to track your food intake.   </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>What should I expect during a diet plan consultation with a dietitian?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            During a diet plan consultation, a dietitian will assess your current eating habits, health goals, and may provide guidance on portion sizes, meal planning, and food choices.  </p>
        </div>

    </div>

</div>


<script>

let accordions = document.querySelectorAll('.accordion-container .accordion');

accordions.forEach(acco =>{
    acco.onclick = () =>{
        accordions.forEach(subAcco => { subAcco.classList.remove('active') });
        acco.classList.add('active');
    }
})

</script>

    
</body>
</html>