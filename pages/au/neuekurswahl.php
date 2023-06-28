<?php
session_start();
if(!isset($_SESSION['user_mail'])){
    header('Location: ../login.html');
    exit();
}

$servername = "localhost"; 
$username = "abiplaner"; 
$password = "Q1ShlM_abiplaner"; 
$dbname = "abiplaner"; 
// Create connection 

$conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 

$subjects_db = $conn->query("SELECT * FROM subject");
$subjects = [];
// Check ob es Ergebnisse in der Abfrage gab
if ($subjects_db->num_rows > 0) {
    while($subject = $subjects_db->fetch_assoc()){
        $subjects[] = $subject['name'];
    }
}

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="../../css/styles.css" rel="stylesheet">

    </head>

<body>
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#" aria-label="Product">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img"
                    viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10"></circle>
                    <path
                        d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
                    </path>
                </svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#">Home</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Suchen</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Firma</a>
            <a class="py-2 d-none d-md-inline-block" href="login.html">Login</a>
        </nav>
    </header>
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-header rounded">

            <div class="col-md-5 p-lg-5 mx-auto my-5 text-container rounded brighter-span">
                <h1 class="display-4 fw-normal">Kurswahl Info</h1>
                <p class="lead fw-normal">Lé Abi Planer</p>
            </div>

        </div>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <form>
                    <div class="mb-3">
                        <label for="LK1" class="form-label">Leistungskurs 1</label>
                        <select class="form-select" id="LK1" onchange="higherlevel1(this)" aria-label="Default select example">
                            <option selected>Bitte wähle eine Option</option>
                            <?php
                                foreach($subjects as $subject_name) {
                                   echo '<option value="LK1_'.$subject_name.'">'.$subject_name.'</option>';
                                }
                            ?>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="LK2" class="form-label">Leistungskurs 2</label>
                        <select class="form-select" id="LK2" aria-label="Default select example">
                            <option selected>Bitte wähle eine Option</option>
                            <?php
                                foreach($subjects as $subject_name) {
                                   echo '<option value="LK2_'.$subject_name.'">'.$subject_name.'</option>';
                                }
                            ?>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="FS1" class="form-label">1.Fremdsprache</label>
                        <select class="form-select" id="FS1" aria-label="Default select example">
                            <option selected>Bitte wähle eine Option</option>
                            <?php
                              $subjects_db = $conn->query("SELECT * FROM subject where name ='Englisch'");
                              $subjects = [];
                              // Check ob es Ergebnisse in der Abfrage gab
                              if ($subjects_db->num_rows > 0) {
                                  while($subject = $subjects_db->fetch_assoc()){
                                      $subjects[] = $subject['name'];
                                  }
                                }

                                foreach($subjects as $subject_name) {
                                   echo '<option value="FS1_'.$subject_name.'">'.$subject_name.'</option>';
                                }
                            ?>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="FS2" class="form-label">2.Fremdsprache*</label>
                        <select class="form-select" id="FS2" aria-label="Default select example">
                            <option selected>Bitte wähle eine Option</option>
                            <?php
                                foreach($subjects as $subject_name) {
                                   echo '<option value="FS2_'.$subject_name.'">'.$subject_name.'</option>';
                                }
                            ?>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="kuMuDsp" class="form-label">DSP, Kunst oder Musik</label>
                        <select class="form-select" id="kuMuDsp" aria-label="Default select example" onchange="test(this)">
                            <option selected>Bitte wähle eine Option</option>
                            <?php
                             $subjects_db = $conn->query("SELECT * FROM subject where name in ('DSP','Kunst','Musik')");
                             $subjects = [];
                             // Check ob es Ergebnisse in der Abfrage gab
                             if ($subjects_db->num_rows > 0) {
                                 while($subject = $subjects_db->fetch_assoc()){
                                     $subjects[] = $subject['name'];
                                 }
                               }
                                foreach($subjects as $subject_name) {
                                   echo '<option value="KuMuDsp_'.$subject_name.'">'.$subject_name.'</option>';
                                }
                            ?>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="Na1" class="form-label">1. Naturwissenschaft</label>
                        <select class="form-select" id="Na1" aria-label="Default select example" onchange="test(this)">
                            <option selected>Bitte wähle eine Option</option>
                            <?php
                             $subjects_db = $conn->query("SELECT * FROM subject where subject_council = 'FB 3' and name != 'Mathe'");
                             $subjects = [];
                             // Check ob es Ergebnisse in der Abfrage gab
                             if ($subjects_db->num_rows > 0) {
                                 while($subject = $subjects_db->fetch_assoc()){
                                     $subjects[] = $subject['name'];
                                 }
                               }
                                foreach($subjects as $subject_name) {
                                   echo '<option value="KuMuDsp_'.$subject_name.'">'.$subject_name.'</option>';
                                }
                            ?>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="Na2" class="form-label">2. Naturwissenschaft</label>
                        <select class="form-select" id="Na2" aria-label="Default select example" onchange="test(this)">
                            <option selected>Bitte wähle eine Option</option>
                            <?php
                             $subjects_db = $conn->query("SELECT * FROM subject where subject_council = 'FB 3' and name != 'Mathe'");
                             $subjects = [];
                             // Check ob es Ergebnisse in der Abfrage gab
                             if ($subjects_db->num_rows > 0) {
                                 while($subject = $subjects_db->fetch_assoc()){
                                     $subjects[] = $subject['name'];
                                 }
                               }
                                foreach($subjects as $subject_name) {
                                   echo '<option value="KuMuDsp_'.$subject_name.'">'.$subject_name.'</option>';
                                }
                            ?>
                          </select>
                    </div>


               
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="submit" value="Submit">
                  </form>
            </div>
        </div>

    </main>


    <script>
        function higherlevel1(select) {
            const higherlevel1 = select.options[input.selectedIndex].text;
            const higherlevel2 = document.gerElementByID('LK2');
            
        }
        function test(input) {
            let value = input.options[input.selectedIndex].text;
            
            if(value != "Powi") {
                let div = document.createElement('div');
                div.id = 'Powi';
                
                let label = document.createElement('label');
                label.innerHTML = "Weiterer GK";
                
                let powiInput = document.createElement('input');
                powiInput.type = 'text';
                powiInput.disabled = true;
                powiInput.value = "Powi";
                
                let form = document.getElementById('form');
                div.append(label);
                div.append(powiInput);
                form.append(div);
            }
            if(value == "Powi") {  
                document.getElementById('Powi').remove();
            }
        }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>
</html>