<?php include('../partials/ece_nav.php') ?>


<div class="div_scrol " style="padding-top: 32px">
       <div class="container-fluid ">
              <div class="row">

                     <div class="col-sm-2 bg-dark text-dark border-0 rounded ">

                            <div class="nav flex-column nav-pills ">
                                   <a class="nav-link  mb-1 mt-3 active border  btn-light text-center"
                                          data-toggle="pill" href="#exercise-1"> <strong>
                                                 Overview</strong></a>
                                   <a class="nav-link border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-2" role="tab"><strong>
                                                 Active Element</strong></a>
                                   <a class="nav-link btn-light border text-center my-1" data-toggle="pill"
                                          href="#exercise-3"><strong classs="text-white "> Passive Element</strong></a>
                                   <!-------------------------------------collapse_able  item ----------------------------------------------------------------------->
                                   <button class="btn bg-light text-center text-dark  btn-lg my-2"
                                          data-target="#collapse_ch_4" data-toggle="pill" data-toggle="collapse">
                                          <strong> Network Theory </strong>
                                   </button>




                                   <div id="collapse_ch_4" class="collapse ">

                                          <div class="nav flex-column nav-pills " id="v-pills-tab">
                                                 <a class="nav-link border   btn-light text-center " data-toggle="pill"
                                                        href="#exercise-4_1"><strong classs="text-white  ">
                                                               Kirchhoff’s Current Law</strong></a>
                                                 <a class="nav-link border   btn-light text-center" data-toggle="pill"
                                                        href="#exercise-4_2"><strong classs="text-white ">
                                                               Norton’s theorem</strong></a>
                                                 <a class="nav-link border   btn-light text-center " data-toggle="pill"
                                                        href="#exercise-4_3"><strong classs="text-white ">
                                                               Thevenin’s theorem</strong></a>
                                                 <a class="nav-link border   btn-light text-center  " data-toggle="pill"
                                                        href="#exercise-4_4"><strong classs="text-white">
                                                               Superposition theorem</strong></a>
                                          </div>


                                   </div>
                                   <!-- -----------------------------------------------------collapsable_item_end ------------------------------------------>

                                   <a class="nav-link  border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-5"><strong classs="text-white "> Ac and Dc analysis</strong></a>
                                   <a class="nav-link  border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-6" role="tab"><strong classs="txet-danser">
                                                 Series Resonance </strong></a>
                                   <a class="nav-link border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-7"><strong classs="text-white "> Parallel resonance</strong></a>

                                   <a class="nav-link  border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-5"><strong classs="text-white "> Tow port network
                                   </strong></a>
                               
                                   <a class="nav-link border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-6"><strong classs="text-white "> Filters
                                                 </strong></a>




                            </div>

                     </div>
                     <div class="col-sm-9 bg-light ">

                            <div class=" tab-content ">
                                   <!--exercise -1 starts -->
                                   <div class="tab-pane fade show active " id="exercise-1">
                                          <br>
                                          <h3 class=" text-center font-weight-bold text-secondary"> Introduction </h3>

                                          Network theory is the study of solving the problems of electric circuits or
                                          electric networks. In this introductory chapter, let us first discuss the
                                          basic terminology of electric circuits and the types of network elements.

                                          <h5 class="text-secondary"> Basic Terminology </h5>
                                          In Network Theory, we will frequently come across the following terms −
                                          <ul>
                                                 <li>Electric Circuit</li>
                                                 <li> Electric Network</li>
                                                 <li> Current</li>
                                                 <li> Voltage</li>
                                                 <li> Power</li>
                                          </ul>





                                          So, it is imperative that we gather some basic knowledge on these terms before
                                          proceeding further. Let’s start with Electric Circuit.

                                          <h6 class="text-secondary"> Electric Circuit </h6>
                                          An electric circuit contains a closed path for providing a flow of electrons
                                          from a voltage source or current source. The elements present in an electric
                                          circuit will be in series connection, parallel connection, or in any
                                          combination of series and parallel connections.

                                          <h6 class="text-secondary"> Electric Network </h6>
                                          An electric network need not contain a closed path for providing a flow of
                                          electrons from a voltage source or current source. Hence, we can conclude that
                                          "all electric circuits are electric networks" but the converse need not be
                                          true.

                                          <h6 class="text-secondary"> Current</h6>
                                          The current "I" flowing through a conductor is nothing but the time rate of
                                          flow of charge. Mathematically, it can be written as
                                          <pre>
                                          I = dQ /dt
                                                 Where,
                                                    Q is the charge and its unit is Coloumb.

                                                    t is the time and its unit is second.
                                          </pre>
                                          <p> As an analogy, electric current can be thought of as the flow of water
                                                 through
                                                 a pipe. Current is measured in terms of Ampere.
                                          </p>
                                          <p>
                                                 In general, Electron current flows from negative terminal of source to
                                                 positive terminal, whereas, Conventional current flows from positive
                                                 terminal
                                                 of source to negative terminal.
                                          </p>
                                          <p>
                                                 Electron current is obtained due to the movement of free electrons,
                                                 whereas,
                                                 Conventional current is obtained due to the movement of free positive
                                                 charges.
                                                 Both of these are called as electric current.
                                          </P>
                                          <h6 class="text-secondary"> Voltage</h6>

                                          The voltage "V" is nothing but an electromotive force that causes the charge
                                          (electrons) to flow. Mathematically, it can be written as
                                          <pre>
                                          V=dW/dQ
                                          Where,

                                          W is the potential energy and its unit is Joule.

                                          Q is the charge and its unit is Coloumb.
                                          </pre>
                                          <p>
                                                 As an analogy, Voltage can be thought of as the pressure of water that
                                                 causes
                                                 the water to flow through a pipe. It is measured in terms of Volt.
                                          </P>
                                          <h6 class="text-secondary"> Power</h6>
                                          The power "P" is nothing but the time rate of flow of electrical energy.
                                          Mathematically, it can be written as
                                          <pre>
                                          P=dW/dt
                                          Where,

                                          W is the electrical energy and it is measured in terms of Joule.

                                          t is the time and it is measured in seconds.

                                          We can re-write the above equation a

                                          P=dW/dt =dW/dQ×dQ/dt=VI
                                          Therefore, power is nothing but the product of voltage V and current I.
                                    </pre>



                                   </div>
                                   <!--exercise -2 starts -->


                                   <div class="tab-pane fade  " id="exercise-2">
                                          <br>
                                          <h3 class=" text-center font-weight-bold text-secondary"> Active element </h3>

                                          Active Elements are the network elements that deliver power to other elements
                                          present in an electric circuit. So, active elements are also called as sources
                                          of voltage or current type. We can classify these sources into the following
                                          two categories −


                                          <ul>
                                                 <li>Independent Sources</li>
                                                 <li> Independent Sources</li>

                                          </ul>


                                          <h5 class="text-secondary">Independent Sources</h5>
                                          As the name suggests, independent sources produce fixed values of voltage or
                                          current and these are not dependent on any other parameter. Independent
                                          sources can be further divided into the following two categories −



                                          <ul>
                                                 <li>Independent Voltage Sources</li>
                                                 <li> Independent Current Sources</li>

                                          </ul>







                                          <h6 class="text-secondary">Independent Voltage Sources </h6>
                                          An independent voltage source produces a constant voltage across its two
                                          terminals. This voltage is independent of the amount of current that is
                                          flowing through the two terminals of voltage source.There is a deviation in
                                          the V-I characteristics of an independent practical voltage source from the
                                          V-I characteristics of an independent ideal voltage source. This is due to the
                                          voltage drop across the internal resistance (RS) of an independent practical
                                          voltage source.
                                          <h6 class="text-secondary"> Independent Current Sources </h6>
                                          An independent current source produces a constant current. This current is
                                          independent of the voltage across its two terminals. Independent ideal current
                                          source and its V-I characteristics.
                                          There is a deviation in the V-I characteristics of an independent practical
                                          current source from the V-I characteristics of an independent ideal current
                                          source. This is due to the amount of current flows through the internal shunt
                                          resistance (RS) of an independent practical current source
                                          <h6 class="text-secondary"> Dependent Sources</h6>
                                          The current "I" flowing through a conductor is nothing but the time rate of
                                          flow of charge. Mathematically, it can be written as
                                          As the name suggests, dependent sources produce the amount of voltage or
                                          current that is dependent on some other voltage or current. Dependent sources
                                          are also called as controlled sources. Dependent sources can be further
                                          divided into the following two categories −

                                          <ul>
                                                 <li> Dependent Voltage Sources </li>
                                                 <li> Dependent Current Sources </li>
                                          </ul>
                                          <h6 class="text-secondary"> Dependent voltage Sources</h6>
                                          A dependent voltage source produces a voltage across its two terminals. The
                                          amount of this voltage is dependent on some other voltage or current. Hence,
                                          dependent voltage sources can be further classified into the following two
                                          categories −
                                          <ul>
                                                 <li>Voltage Dependent Voltage Source (VDVS) </li>
                                                 <li>Current Dependent Voltage Source (CDVS)</li>
                                          </ul>
                                          Dependent voltage sources are represented with the signs ‘+’ and ‘-’ inside a
                                          diamond shape. The magnitude of the voltage source can be represented outside
                                          the diamond shape.

                                          <h6 class="text-secondary"> Dependent current Sources</h6>
                                          A dependent current source produces a current. The amount of this current is
                                          dependent on some other voltage or current. Hence, dependent current sources
                                          can be further classified into the following two categories −

                                          <ul>
                                                 <li> Voltage Dependent Current Source (VDCS)</li>
                                                 <li>Current Dependent Current Source (CDCS)
                                                 </li>
                                          </ul>
                                          Dependent current sources are represented with an arrow inside a diamond
                                          shape. The magnitude of the current source can be represented outside the
                                          diamond shape.

                                          We can observe these dependent or controlled sources in equivalent models of
                                          transistors.

                                          <h6 class="text-secondary"> Source Transformation Technique</h6>
                                          We know that there are two practical sources, namely, voltage source and
                                          current source. We can transform (convert) one source into the other based on
                                          the requirement, while solving network problems.
                                          <br>
                                          The technique of transforming one source into the other is called as source
                                          transformation technique. Following are the two possible source
                                          transformations −
                                          <ul>
                                                 <li>Practical voltage source into a practical current source</li>
                                                 <li>Practical current source into a practical voltage source</li>
                                          </ul>



                                   </div>

                                   <!--Exercise-3 starts -->
                                   <div class="tab-pane fade" id="exercise-3">
                                          <br>
                                          <h3 class=" text-center font-weight-bold text-secondary"> Resistor </h3>


                                          The main functionality of Resistor is either opposes or restricts the flow of
                                          electric current. Hence, the resistors are used in order to limit the amount
                                          of current flow and / or dividing (sharing) voltage.

                                          Let the current flowing through the resistor is I amperes and the voltage
                                          across it is V volts. The symbol of resistor along with current, I and voltage
                                          in the element then,
                                          <br>
                                          <p class="text-center"> R = V /I</p>
                                          According to Ohm’s law, the voltage across resistor is the product of current
                                          flowing through it and the resistance of that resistor. Mathematically, it can
                                          be represented as <br>

                                          V=IR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Equation 1 <br>

                                          ⇒I=V/R &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equation 2<br>

                                          Where, R is the resistance of a resistor.<br>

                                          From Equation 2, we can conclude that the current flowing through the resistor
                                          is directly proportional to the applied voltage across resistor and inversely
                                          proportional to the resistance of resistor.<br>

                                          Power in an electric circuit element can be represented as<br>

                                          P=VI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equation 3<br>

                                          Substitute, Equation 1 in Equation 3.<br>

                                          P=(IR)I<br>

                                          ⇒P=I2/R &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equation 4<br>

                                          Substitute, Equation 2 in Equation 3.<br>

                                          P=V⟮V/R⟯<br>

                                          ⇒P=V2/R &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equation 5<br>

                                          So, we can calculate the amount of power dissipated in the resistor by using
                                          one of the formulae mentioned in Equations 3 to 5.



                                          <h3 class="text-secondary text-center font-weight-bold ">Inductor</h3>

                                          In general, inductors will have number of turns. Hence, they produce magnetic
                                          flux when current flows through it. So, the amount of total magnetic flux
                                          produced by an inductor depends on the current, I flowing through it and they
                                          have linear relationship. <br>

                                          Mathematically, it can be written as <br>
                                          <p class="text-center"> ΨαI <br>
                                                 ⇒ &nbsp; Ψ=LI <br>
                                                 Where, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br>

                                                 &nbsp; &nbsp; Ψ is the total magnetic flux <br>

                                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; L is the
                                                 inductance of an inductor</p>

                                          According to Faraday’s law, the voltage across the inductor can be written as
                                          <br>

                                          V=dΨdt <br>
                                          Substitute Ψ = LI in the above equation. <br>

                                          V=d(LI)dt <br>
                                          ⇒V=LdIdt <br>
                                          ⇒I=1L∫Vdt <br>
                                          From the above equations, we can conclude that there exists a linear
                                          relationship between voltage across inductor and current flowing through it.

                                          We know that power in an electric circuit element can be represented as <br>

                                          P=VI <br>
                                          Substitute V=LdIdt in the above equation. <br>

                                          P=⟮LdIdt⟯I <br>
                                          ⇒P=LIdIdt <br>
                                          By integrating the above equation, we will get the energy stored in an
                                          inductor as
                                          <br>
                                          W=12LI2 <br>
                                          So, the inductor stores the energy in the form of magnetic field.









                                          <h3 class="text-secondary text-center font-weight-bold "> Capacitor </h3>

                                          In general, a capacitor has two conducting plates, separated by a dielectric
                                          medium. If positive voltage is applied across the capacitor, then it stores
                                          positive charge. Similarly, if negative voltage is applied across the
                                          capacitor, then it stores negative charge. <br>

                                          So, the amount of charge stored in the capacitor depends on the applied
                                          voltage V across it and they have linear relationship. Mathematically, it can
                                          be written as <br>

                                          QαV<br>
                                          ⇒Q=CV<br>
                                          Where,<br>

                                          Q is the charge stored in the capacitor.<br>

                                          C is the capacitance of a capacitor.<br>

                                          Let the current flowing through the capacitor is I amperes and the voltage
                                          across it is V volts. The symbol of capacitor along with current I and voltage
                                          V are shown in the following figure.

                                          <h6> Capacitor </h6><br>
                                          We know that the current is nothing but the time rate of flow of charge.
                                          Mathematically, it can be represented as<br>

                                          I=dQdt<br>
                                          Substitute Q=CV in the above equation.<br>

                                          I=d(CV)dt<br>
                                          ⇒I=CdVdt<br>
                                          ⇒V=1C∫Idt<br>
                                          From the above equations, we can conclude that there exists a linear
                                          relationship between voltage across capacitor and current flowing through it.

                                          We know that power in an electric circuit element can be represented as

                                          P=VI<br>
                                          Substitute I=CdVdt in the above equation.<br>

                                          P=V⟮CdVdt⟯<br>
                                          ⇒P=CVdVdt<br>
                                          By integrating the above equation, we will get the energy stored in the
                                          capacitor as
                                          <br>
                                          W=12CV2<br>
                                          An independent voltage source produces a constant voltage across its two
                                          terminals. This voltage is independent of the amount of current that is
                                          flowing through the two terminals of voltage source.There is a deviation in
                                          the V-I characteristics of an independent practical voltage source from the
                                          V-I characteristics of an independent ideal voltage source. This is due to the
                                          voltage drop across the internal resistance (RS) of an independent practical
                                          voltage source.



                                   </div>

                                   <!-- chapter-4 collesp content-->

                                   <div class="tab-pane  fade " id="exercise-4_1">
                                          <h3 class=" text-center font-weight-bold text-secondary"> Kirchhoff's law
                                          </h3>
                                          let us discuss about the following two laws, which are popularly known as
                                          Kirchhoff’s laws. <br>

                                          <h4 class=" text-center font-weight-bold text-secondary"> Kirchhoff’s Current
                                                 Law </h4> Kirchhoff’s Current Law


                                          Kirchhoff’s Current Law (KCL) states that the algebraic sum of currents
                                          leaving (or entering) a node is equal to zero.
                                          <br>
                                          A Node is a point where two or more circuit elements are connected to it. If
                                          only two circuit elements are connected to a node, then it is said to be
                                          simple node. If three or more circuit elements are connected to a node, then
                                          it is said to be Principal Node.
                                          <br>
                                          Mathematically, KCL can be represented as <br>

                                          ∑m=1MIm=0<br>
                                          Where,
                                          <br>
                                          Im is the mth branch current leaving the node.

                                          M is the number of branches that are connected to a node.
                                          <br>
                                          The above statement of KCL can also be expressed as "the algebraic sum of
                                          currents entering a node is equal to the algebraic sum of currents leaving a
                                          node". <br>
                                          The KCL equation at node P will be<br>

                                          −I1−I2−I3+I4+I5=0<br>
                                          ⇒I1+I2+I3=I4+I5<br>
                                          In the above equation, the left-hand side represents the sum of entering
                                          currents, whereas the right-hand side represents the sum of leaving currents.
                                          <br>
                                          In this tutorial, we will consider positive sign when the current leaves a
                                          node and negative sign when it enters a node. Similarly, you can consider
                                          negative sign when the current leaves a node and positive sign when it enters
                                          a node. In both cases, the result will be same.
                                          <br>
                                          Note − KCL is independent of the nature of network elements that are connected
                                          to a node.

                                          <h4 class=" text-center font-weight-bold text-secondary"> Kirchhoff’s Voltage
                                                 Law </h4>
                                          Kirchhoff’s Voltage Law (KVL) states that the algebraic sum of voltages around
                                          a loop or mesh is equal to zero.

                                          A Loop is a path that terminates at the same node where it started from. In
                                          contrast, a Mesh is a loop that doesn’t contain any other loops inside it.
                                          <br>
                                          Mathematically, KVL can be represented as<br>

                                          ∑n=1NVn=0<br>
                                          Where,
                                          <br>
                                          Vn is the nth element’s voltage in a loop (mesh).<br>

                                          N is the number of network elements in the loop (mesh).<br>

                                          The above statement of KVL can also be expressed as "the algebraic sum of
                                          voltage sources is equal to the algebraic sum of voltage drops that are
                                          present in a loop."
                                   </div>



                                   <div class="tab-pane  fade  " id="exercise-4_2">
                                          <h4 class=" text-center font-weight-bold text-secondary"> Norton’s theorem
                                          </h4>
                                          Norton’s theorem is similar to Thevenin’s theorem. It states that any two
                                          terminal linear network or circuit can be represented with an equivalent
                                          network or circuit, which consists of a current source in parallel with a
                                          resistor. It is known as Norton’s equivalent circuit. A linear circuit may
                                          contain independent sources, dependent sources and resistors.
                                          <br>
                                          If a circuit has multiple independent sources, dependent sources, and
                                          resistors, then the response in an element can be easily found by replacing
                                          the entire network to the left of that element with a Norton’s equivalent
                                          circuit.<br>

                                          The response in an element can be the voltage across that element, current
                                          flowing through that element or power dissipated across that element.
                                          <br>


                                          Response in a Element
                                          Norton’s equivalent circuit resembles a practical current source. Hence, it is
                                          having a current source in parallel with a resistor.
                                          <br>
                                          The current source present in the Norton’s equivalent circuit is called as
                                          Norton’s equivalent current or simply Norton’s current IN.
                                          <br>
                                          The resistor present in the Norton’s equivalent circuit is called as Norton’s
                                          equivalent resistor or simply Norton’s resistor RN.
                                          <br>
                                          <h4 class=" text-center font-weight-bold text-secondary"> Methods of Finding
                                                 Norton’s Equivalent Circuit </h4>
                                          There are three methods for finding a Norton’s equivalent
                                          circuit. Based on
                                          the type of sources that are present in the network, we can
                                          choose one of
                                          these three methods. Now, let us discuss these three methods one
                                          by one.

                                          <h5> Method 1 </h5>
                                          Follow these steps in order to find the Norton’s
                                          equivalent circuit, when only
                                          the sources of independent type are present. <br>

                                          Step 1 − Consider the circuit diagram by opening
                                          the terminals with respect to
                                          which, the Norton’s equivalent circuit is to be
                                          found.<br>

                                          Step 2 − Find the Norton’s current IN by shorting
                                          the two opened terminals of
                                          the above circuit.<br>

                                          Step 3 − Find the Norton’s resistance RN across
                                          the open terminals of the
                                          circuit considered in Step1 by eliminating the
                                          independent sources present in
                                          it. Norton’s resistance RN will be same as that of
                                          Thevenin’s resistance RTh.
                                          <br>
                                          Step 4 − Draw the Norton’s equivalent circuit by
                                          connecting a Norton’s current
                                          IN in parallel with Norton’s resistance RN.
                                          <br>
                                          Now, we can find the response in an element that
                                          lies to the right side of
                                          Norton’s equivalent circuit.

                                          <h5> Method - 2 </h5>
                                          Follow these steps in order to find the Norton’s
                                          equivalent circuit, when the
                                          sources of both independent type and dependent
                                          type are present.
                                          <br>
                                          Step 1 − Consider the circuit diagram by opening
                                          the terminals with respect to
                                          which the Norton’s equivalent circuit is to be
                                          found.
                                          <br>
                                          Step 2 − Find the open circuit voltage VOC across
                                          the open terminals of the
                                          above circuit.
                                          <br>
                                          Step 3 − Find the Norton’s current IN by shorting
                                          the two opened terminals of
                                          the above circuit.
                                          <br>
                                          Step 4 − Find Norton’s resistance RN by using the
                                          following formula.
                                          <br>
                                          RN=VOCIN<br>
                                          Step 5 − Draw the Norton’s equivalent circuit by
                                          connecting a Norton’s current
                                          IN in parallel with Norton’s resistance RN.
                                          <br>
                                          Now, we can find the response in an element that
                                          lies to the right side of
                                          Norton’s equivalent circuit.
                                          <br>
                                          <h5> Method-3 </h5>
                                          This is an alternate method for
                                          finding a Norton’s equivalent
                                          circuit.
                                          <br>
                                          Step 1 − Find a Thevenin’s
                                          equivalent circuit between the
                                          desired two
                                          terminals. We know that it consists
                                          of a Thevenin’s voltage source, VTh
                                          and
                                          Thevenin’s resistor, RTh.
                                          <br>
                                          Step 2 − Apply source transformation
                                          technique to the above Thevenin’s
                                          equivalent circuit. We will get the
                                          Norton’s equivalent circuit. Here,
                                          <br>
                                          Norton’s current,
                                          <br>
                                          IN=VThRTh<br>
                                          Norton’s resistance,
                                          <br>
                                          RN=RTh<br>
                                          This concept is illustrated in the
                                          following figure.
                                          <br>
                                          Source Transformation<br>
                                          Now, we can find the response in an
                                          element by placing Norton’s
                                          equivalent
                                          circuit to the left of that element.
                                          <br> <br>
                                          Note − Similarly, we can find the
                                          Thevenin’s equivalent circuit by
                                          finding a
                                          Norton’s equivalent circuit first
                                          and then apply source transformation
                                          technique to it. This concept is
                                          illustrated in the following figure.


                                   </div>

                                   <div class="tab-pane  fade " id="exercise-4_3"> <br> <br>
                                      <h3 class="text-center font-weight-bold text-secondary">  Thevenin's theorem </h3>
                                          Thevenin’s theorem states that any two terminal linear network or circuit can
                                          be represented with an equivalent network or circuit, which consists of a
                                          voltage source in series with a resistor. It is known as Thevenin’s equivalent
                                          circuit. A linear circuit may contain independent sources, dependent sources,
                                          and resistors.
<br>
                                          If the circuit contains multiple independent sources, dependent sources, and
                                          resistors, then the response in an element can be easily found by replacing
                                          the entire network to the left of that element with a Thevenin’s equivalent
                                          circuit. <br>

                                          The response in an element can be the voltage across that element, current
                                          flowing through that element, or power dissipated across that element.
<br>
                                          This concept is illustrated in following figures.
<br>
                                          Response in Element
                                          Thevenin’s equivalent circuit resembles a practical voltage source. Hence, it
                                          has a voltage source in series with a resistor.
<br>
                                          The voltage source present in the Thevenin’s equivalent circuit is called as
                                          Thevenin’s equivalent voltage or simply Thevenin’s voltage, VTh.
                                          <br>
                                          The resistor present in the Thevenin’s equivalent circuit is called as
                                          Thevenin’s equivalent resistor or simply Thevenin’s resistor, RTh.
                                          <br>
                                       <h4 calss ="text-center">   Methods of Finding Thevenin’s Equivalent Circuit </h4>
                                          There are three methods for finding a Thevenin’s equivalent circuit. Based on
                                          the type of sources that are present in the network, we can choose one of
                                          these three methods. Now, let us discuss two methods one by one. We will
                                          discuss the third method in the next chapter.
<br>
                                          Method 1<br>
                                          Follow these steps in order to find the Thevenin’s equivalent circuit, when
                                          only the sources of independent type are present.
                                          <br>
                                          Step 1 − Consider the circuit diagram by opening the terminals with respect to
                                          which the Thevenin’s equivalent circuit is to be found.
                                          <br>
                                          Step 2 − Find Thevenin’s voltage VTh across the open terminals of the above
                                          circuit.
                                          <br>
                                          Step 3 − Find Thevenin’s resistance RTh across the open terminals of the above
                                          circuit by eliminating the independent sources present in it.
                                          <br>
                                          Step 4 − Draw the Thevenin’s equivalent circuit by connecting a Thevenin’s
                                          voltage VTh in series with a Thevenin’s resistance RTh.
                                          <br>
                                          Now, we can find the response in an element that lies to the right side of
                                          Thevenin’s equivalent circuit.
                                          <br>
                                       
                                   </div>

                                   <div class="fade tab-pane  fade  " id="exercise-4_4">

                                          <h4 class=" text-center font-weight-bold text-secondary"> Superposition
                                                 theorem</h4>
                                          Superposition theorem is based on the concept of linearity between the
                                          response and excitation of an electrical circuit. It states that the response
                                          in a particular branch of a linear circuit when multiple independent sources
                                          are acting at the same time is equivalent to the sum of the responses due to
                                          each independent source acting at a time. <br>

                                          In this method, we will consider only one independent source at a time. So, we
                                          have to eliminate the remaining independent sources from the circuit. We can
                                          eliminate the voltage sources by shorting their two terminals and similarly,
                                          the current sources by opening their two terminals. <br>

                                          Therefore, we need to find the response in a particular branch ‘n’ times if
                                          there are ‘n’ independent sources. The response in a particular branch could
                                          be either current flowing through that branch or voltage across that branch.
                                          <br>
                                          <h4 class="text-center font-weight-bold text-secondary"> Procedure of
                                                 Superposition Theorem </h4>

                                          Follow these steps in order to find the response in a particular branch using
                                          superposition theorem.
                                          <br>
                                          Step 1 − Find the response in a particular branch by considering one
                                          independent source and eliminating the remaining independent sources present
                                          in the network.
                                          <br>
                                          Step 2 − Repeat Step 1 for all independent sources present in the network.
                                          <br>
                                          Step 3 − Add all the responses in order to get the overall response in a
                                          particular branch when all independent sources are present in the network.
                                          <br>


                                          Note − We can’t apply superposition theorem directly in order to find the
                                          amount of power delivered to any resistor that is present in a linear circuit,
                                          just by doing the addition of powers delivered to that resistor due to each
                                          independent source. Rather, we can calculate either total current flowing
                                          through or voltage across that resistor by using superposition theorem and
                                          from that, we can calculate the amount of power delivered to that resistor
                                          using I2R or V2R.
                                          </br>
                                   </div>






                            </div>
                     </div>

                     <!-- left section -->




                     <?php include('../partials/homefooter.php') ?>