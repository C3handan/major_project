<?php include('../partials/ece_nav.php') ?>
<!--   left_sidebar   -->

<div class="div_scrol " style="padding-top: 32px">
       <div class="container-fluid ">
              <div class="row">

                     <div class="col-sm-2 bg-dark text-dark border-0 rounded ">    

                            <div class="nav flex-column nav-pills ">
                                   <a class="nav-link  mb-1 mt-3 active border  btn-light text-center"
                                          data-toggle="pill" href="#exercise-1"> <strong >
                                                 Boolean Algebra</strong></a>
                                   <a class="nav-link border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-2" role="tab"><strong >
                                                 Number System</strong></a>
                                   <a class="nav-link btn-light border text-center my-1" data-toggle="pill"
                                          href="#exercise-3"><strong classs="text-white "> multiplexer</strong></a>
                                   <!-------------------------------------collapse_able  item ----------------------------------------------------------------------->
                                   <button class="btn bg-light text-center text-dark  btn-lg my-2" data-target="#collapse_ch_4"
                                          data-toggle="pill" data-toggle="collapse"> 
                                              <strong>   flip-flop  </strong>
                                   </button>




                                   <div id="collapse_ch_4" class="collapse ">

                                          <div class="nav flex-column nav-pills " id="v-pills-tab">
                                                 <a class="nav-link border   btn-light text-center " data-toggle="pill"
                                                        href="#exercise-4_1"><strong classs="text-white  ">
                                                                d-flip flop</strong></a>
                                                 <a class="nav-link border   btn-light text-center" data-toggle="pill"
                                                        href="#exercise-4_2"><strong classs="text-white ">
                                                               T-flip flop</strong></a>
                                                 <a class="nav-link border   btn-light text-center " data-toggle="pill"
                                                        href="#exercise-4_3"><strong classs="text-white ">
                                                               jk-flip flop</strong></a>
                                                 <a class="nav-link border   btn-light text-center  " data-toggle="pill"
                                                        href="#exercise-4_4"><strong classs="text-white">
                                                               SR FLIP FLOP</strong></a>
                                          </div>


                                   </div>
                                   <!-- -----------------------------------------------------collapsable_item_end ------------------------------------------>

                                   <a class="nav-link  border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-5"><strong classs="text-white ">  COUNTER</strong></a>
                                   <a class="nav-link  border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-6" role="tab"><strong classs="txet-danser">
                                               shift Register  </strong></a>
                                   <a class="nav-link border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-7"><strong classs="text-white "> Ripple Counter</strong></a>

                                          <a class="nav-link  border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-5"><strong classs="text-white ">  Universal Shift register</strong></a>
                                   <a class="nav-link  border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-6" role="tab"><strong classs="txet-danser">
                                               shift Register  </strong></a>
                                   <a class="nav-link border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-7"><strong classs="text-white "> Verilog data types</strong></a>




                            </div>

                     </div>
                     <div class="col-sm-9 bg-light ">

                            <div class=" tab-content ">
                                   <div class="tab-pane fade show active " id="exercise-1">
                                          <h class="h4"> Boolean Algebra </h>

                                          <p> In Boolean Algebra, there are three basic operations, +,\:.\:,\:^\prime
                                                 which are analogous to disjunction, conjunction,
                                                 and negation in propositional logic. Each of these operations has a
                                                 corresponding logic gate. Apart from these
                                                 there are a few other logic gates as well.

                                          <p class="font-weight-bold"> Logic Gates – </p>

                                          AND gate(.) – The AND gate gives an output of 1 if both the two inputs
                                          are 1, it gives 0 otherwise.
                                          <br>
                                          OR gate(+) – The OR gate gives an output of 1 if either of the two
                                          inputs are 1, it gives 0 otherwise.
                                          NOT gate(‘) – The NOT gate gives an output of 1 input is 0 and
                                          vice-versa.
                                          <br>
                                          XOR gate(\oplus) – The XOR gate gives an output of 1 if either both
                                          inputs are different, it gives 0 if they are same.
                                          <br>
                                          <br>
                                          <p class=text-secondary> Three more logic gates are obtained if the output of
                                                 above-mentioned
                                                 gates is negated.</p>
                                                 <p>

                                                 NAND gate - The NAND gate (negated AND) gives an output of 0
                                                 if both inputs are 1, it gives 1 otherwise. <br>
                                                 NOR gate - The NOR gate (negated OR) gives an output of 1 if
                                                 both inputs are 0, it gives 0 otherwise.<br>
                                                 XNOR gate - The XNOR gate (negated XOR) gives an output of 1 both
                                                 inputs are same and 0 if both are different.
                                          </p>

                                          <p class="font-weight-bold">  Universal Logic Gates – </p>
                                          Out of the seven logic gates discussed above, NAND and NOR are also known as
                                          universal gates since they can be used to implement any digital circuit
                                          without using any other gate. This means that every gate can be created by
                                          NAND or NOR gates only.

                                          <p class="font-weight-bold"> Properties of Boolean Algebra </p>

                                         <p> Switching algebra is also known as Boolean Algebra. It is used to analyze
                                          digital gates and circuits It is logic to perform mathematical operation on
                                          binary numbers i.e., on ‘0’ and ‘1’. Boolean Algebra contains basic operators
                                          like AND, OR and NOT etc. Operations are represented by ‘.’ for AND , ‘+’ for
                                          OR . Operations can be performed on variables which are represented using
                                          capital letter eg ‘A’ , ‘B’ etc.<p>

                                          <h5 class="font-weight-bold"> Properties of switching algebra – </h5>

                                         <p class ="font-bold"> <span class= "font-weight-light"> Annulment law - </span> a variable ANDed with 0 gives 0, while a variable ORed with 1
                                          gives 1.  i.e., <br>
                                          A.0 = 0 <br>
                                          A + 1 = 1 <br> </p>

                                          Identity law – in this law variable remain unchanged it is ORed with ‘0’ or
                                          ANDed with ‘1’, i.e.,
                                          A.1 = A
                                          A + 0 = A

                                          Idempotent law – a variable remain unchanged when it is ORed or ANDed with
                                          itself, i.e.,
                                          A + A = A
                                          A.A = A


                                   </div>
                                   <div class=" tab-pane fade " id="exercise-2">...
                                   

                                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad
                                          deleniti in, eligendi delectus consectetur culpa! Facilis maiores
                                          maxime, dignissimos a
                                          nihil ullam
                                          dolorum repellendus. Officiis magni quos tempore fugit ex. Lorem ipsum
                                          dolor sit amet

                                          assumenda reprehenderit doloremque officia officiis consequuntur sequi
                                          magnam distinctio
                                          omnis ex?
                                          Fugiat nihil temporibus distinctio debitis
                                   </div>
                                   <div class="tab-pane fade" id="exercise-3">
                                          exercise-3

                                          . Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad
                                          deleniti in, eligendi delectus consectetur culpa! Facilis maiores
                                          maxime, dignissimos a



                                   </div>

                                   <!-- chapter-4 collesp content-->

                                   <div class="tab-pane  fade " id="exercise-4_1">

                                          exercise-4_1 </br> Lorem ipsum, dolor sit amet consectetur adipisicing
                                          elit. Ad
                                          deleniti in, eligendi delectus consectetur culpa! Facilis maiores
                                          maxime, dignissimos a</br>
                                   </div>

                                   <div class="tab-pane  fade  " id="exercise-4_2">

                                          exercise_4.2 </br> Lorem ipsum, dolor sit amet consectetur adipisicing
                                          elit. Ad
                                          deleniti in, eligendi delectus consectetur culpa! Facilis maiores
                                          maxime, dignissimos a</br>
                                   </div>

                                   <div class="tab-pane  fade " id="exercise-4_3">

                                          exercise_4.3 </br> Lorem ipsum, dolor sit amet consectetur adipisicing
                                          elit. Ad
                                          deleniti in, eligendi delectus consectetur culpa! Facilis maiores
                                          maxime, dignissimos a</br>
                                   </div>

                                   <div class="fade tab-pane  fade  " id="exercise-4_4">

                                          exercise_4.4 </br> Lorem ipsum, dolor sit amet consectetur adipisicing
                                          elit. Ad
                                          deleniti in, eligendi delectus consectetur culpa! Facilis maiores
                                          maxime, dignissimos a
                                          </br>
                                   </div>






                            </div>
                     </div>

                     <!-- left section -->

                     


                     <?php include('../partials/homefooter.php') ?>