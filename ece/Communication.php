<?php include('../partials/ece_nav.php') ?>


<div class="div_scrol " style="padding-top: 32px">
       <div class="container-fluid ">
              <div class="row">

                     <div class="col-sm-2 bg-dark text-dark border-0 rounded ">    

                            <div class="nav flex-column nav-pills ">
                                   <a class="nav-link  mb-1 mt-3 active border  btn-light text-center"
                                          data-toggle="pill" href="#exercise-1"> <strong >
                                                 Overview</strong></a>
                                   <a class="nav-link border btn-light text-center my-1" data-toggle="pill"
                                          href="#exercise-2" role="tab"><strong >
                                                 Mobility Services</strong></a>
                                   <a class="nav-link btn-light border text-center my-1" data-toggle="pill"
                                          href="#exercise-3"><strong classs="text-white "> Modulation</strong></a>
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
                                          <h3 class=" text-center font-weight-bold text-secondary"> Overview </h3>

                                          <p>OVERVIEW
Satellite services, spanning the commercial arena, the military arena, and the earth
sensing arena (including weather tacking), offer critical global connectivity and
observation capabilities, which are perceived to be indispensable in the modern
world. Whether supporting mobility in the form of Internet access and real-time
telemetry from airplanes or ships on oceanic routes, or distribution of high-quality
entertainment video to dispersed areas in emerging markets without significant
infrastructure, or emergency communications in adverse conditions or in remote
areas, or earth mapping, or military theater applications with unmanned aerial
vehicles, satellites fill a void that cannot be met by other forms of communication
mechanisms, including fiber optic links. Over 900 satellites were orbiting the earth as
of press time. However, due to the continued rapid deployment of fiber and Internet
Protocol (IP) services in major metropolitan areas where the paying customers are,
including those in North America, Europe, Asia, South America, and even in Africa,
tech-savvy and marketing-sophisticated approaches that organically integrate IP
into the end-to-end solution are critically needed by the satellite operators to sustain
growth.

                                          <h4 class=" text-center font-weight-bold text-secondary"> SATELLITE APPLICATIONS</h4>

                                          
There are many traditional and emerging satellite applications. Major commercial
applications include, but are not limited to, the applications that are listed as follows:
9Incorrect alignment results in picking up the undesired cross-pol signal, which will severely impact performance/
quality of the intended signal.<br>
SATELLITE APPLICATIONS <br>
• Video Distribution: This includes analog, SD, HD, 3D, and UHD channels. <br>
• Direct To Home: This includes SD, HD, 3D, and UHD channels.<br>
• Video Contribution and Occasional Use (OU): This includes analog feeds and<br>
digital feeds.
• Legacy Telephony and Carrier, including cellular backhaul.<br>
• Enterprise Data.<br>
• Broadband Access.<br>
• Mobility (maritime, aeronautical).<br>
• Government/Military Services.<br>
• M2M Services.<br>
Many of these applications entail IP (specifically IPv4) support; each of these may
need to support IPv6 modes in the not-too-distant future.<br>
• Two-way enterprise (Very Small Aperture Terminal) satellite communications<br>
for intranet/Internet-access connectivity (see Figure 1.14a). Enterprise customers
and/or government agencies may want to use IPv6 in the future (IPv4
is common today). Some VSAT systems are configured in a “mesh” network
that allows the remote sites to communicate with one another without having
to go through the hub site, but this normally requires larger remote antennas.<br>
• Video distribution to Cable Headends (see Figure 1.14b). Cable TV companies<br>
may be interested in IPv6 environments in the future.
• DTH video reception by consumers. Some ancillary applications may be able
to make effective use of an IPv6 infrastructure.<br>
• Aeronautical/mobility passenger Internet access applications 
and M2M applications (Figure 1.15b); IPv6 is the ideal core infrastructure for
evolving IoT and mobility applications.<br>
                                         


                                   </div>
                                   <div class=" tab-pane fade " id="exercise-2">...
                                   

                                          <h4 class=" text-center font-weight-bold text-secondary"> Aeronautics Mobility Services</h4>
This chapter1 assesses emerging mobility applications and services that can be
provided with satellite-based systems. Aeronautical and maritime applications are
becoming important both in support of human communication (e.g., Internet access)
and for machine-to-machine (M2M) communication (e.g., engine telemetry and
goods tracking). Polls show that over 80% of passengers traveling on planes now
have a smartphone or laptop and would, thus, benefit from connectivity, if the service
is priced reasonably. Business travelers may need to connect to their intranet, access
information on the Internet, and communicate via email or Voice over Internet
Protocol (VoIP) while in-flight; the casual traveler may want to connect to the
Internet or access social media platforms – also there appears to be an emerging
trend for the mobile consumption of entertainment streaming video. This chapter
looks at satellite-based connectivity for people on the move in airplanes, in ships, and
in terrestrial vehicles, but with most of the focus on aeronautical applications. In the
context of airplanes, these services are being referred to as in-flight communication
(IFC), which some also call in-flight connectivity. Maritime services are covered in
the next chapter.<br>
1Services, service options, and service providers change over time (new ones are added and existing ones
may drop out as time goes by); as such, any service, service option, or service provider referred to in
this chapter is mentioned strictly as illustrative examples of possible examples of emerging technologies,
trends, or approaches. As such, themention is intended to provide pedagogical value. No recommendations
are implicitly or explicitly implied by the mention of any vendor or any product (or lack thereof).
                                   </div>
                                   <div class="tab-pane fade" id="exercise-3">
                                   <nobr><nowrap>

<div class="pos" id="_163:198" style="top:198;left:163">
<span id="_23.8" style="font-weight:bold; font-family:Times New Roman; font-size:23.8px; color:#221f1f">
DVB-S2 MODULATION EXTENSIONS AND </span>
</div>
<div class="pos" id="_163:221" style="top:221;left:163">
<span id="_23.8" style="font-weight:bold; font-family:Times New Roman; font-size:23.8px; color:#221f1f">
OTHER ADVANCES </span>
</div>
<div class="pos" id="_163:389" style="top:389;left:163">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
We noted in Chapter 1 that business factors that impact the industry at press time include the user&#146;s </span>
</div>
<div class="pos" id="_163:404" style="top:404;left:163">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
(and  operator&#146;s)  desire  for  higher  overall  satellite  channel  and  system  throughput.  Evolving </span>
</div>
<div class="pos" id="_163:419" style="top:419;left:163">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
applications, whether in the context of the delivery of High Definition (HD), Ultra HD, or Internet </span>
</div>
<div class="pos" id="_163:434" style="top:434;left:163">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
access for people on the move (on air planes or ships), drive the operator&#146;s need for higher channel </span>
</div>
<div class="pos" id="_163:449" style="top:449;left:163">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
throughput. Beyond the intrinsic radio channel behavior, modulation and error correction dictate, in </span>
</div>
<div class="pos" id="_163:464" style="top:464;left:163">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
large measure, the performance of the satellite link, the effective channel throughput, and the service </span>
</div>
<div class="pos" id="_163:479" style="top:479;left:163">
<span id="_13.4" style=" font-family:Times New Roman; font-size:13.4px; color:#221f1f">
availability that one is able to obtain over the satellite link. Enhanced modulation schemes allow </span>
</div>
<div class="pos" id="_163:494" style="top:494;left:163">
<span id="_13.4" style=" font-family:Times New Roman; font-size:13.4px; color:#221f1f">
users to increase channel throughput: refined modulation and coding (MODCOD<span id="_11.3" style=" font-size:11.3px"><sub> 1</sub></span> ) techniques are </span>
</div>
<div class="pos" id="_163:513" style="top:513;left:163">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
now being introduced as standardized solu tions embedded in next-generation modems that provide </span>
</div>
<div class="pos" id="_163:529" style="top:529;left:163">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
more bits per second per unit of spectrum. Specifically, extensions to the well-established baseline </span>
</div>
<div class="pos" id="_163:544" style="top:544;left:163">
<span id="_13.3" style=" font-family:Times New Roman; font-size:13.3px; color:#221f1f">
DVB-S2 stan dard are now being introduced in the market. Adaptive coding that is incorporated </span>
</div>
<div class="pos" id="_163:559" style="top:559;left:163">
<span id="_13.3" style=" font-family:Times New Roman; font-size:13.3px; color:#221f1f">
with the new modulation schemes enables more efficient use of the higher frequency bands (e.g., </span>
</div>
<div class="pos" id="_163:574" style="top:574;left:163">
<span id="_13.3" style=" font-family:Times New Roman; font-size:13.3px; color:#221f1f">
Ka) that are intrinsically susceptible to rain-fade. Other ways of achieving higher application-level </span>
</div>
<div class="pos" id="_163:589" style="top:589;left:163">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
throughput are discussed in the next chapter. </span>
</div>
<div class="pos" id="_179:605" style="top:605;left:179">
<span id="_13.6" style=" font-family:Times New Roman; font-size:13.6px; color:#221f1f">
The first part of the chapter provides a foundation for the modulation and For ward Error </span>
</div>
<div class="pos" id="_163:620" style="top:620;left:163">
<span id="_12.8" style=" font-family:Times New Roman; font-size:12.8px; color:#221f1f">
Correction (FEC) discussion; the second part then focuses on the recent advances for ground-based </span>
</div>
<div class="pos" id="_163:635" style="top:635;left:163">
<span id="_12.8" style=" font-family:Times New Roman; font-size:12.8px; color:#221f1f">
elements of the satellite ecosystem, specifically DVB-S2 </span>
</div>
<div class="pos" id="_163:672" style="top:672;left:163">
<span id="_8.1" style=" font-family:Times New Roman; font-size:8.1px; color:#221f1f">
1<span id="_10.1" style=" font-size:10.1px"> MODCOD is also written as modcod. </span></span>
</div>
<div class="pos" id="_162:719" style="top:719;left:162">
<span id="_10.1" style="font-style:italic; font-family:Times New Roman; font-size:10.1px; color:#221f1f">
Innovations in Satellite Communications and Satellite Technology: The Industry Implications of DVB-S2X, High Throughput </span>
</div>
<div class="pos" id="_162:730" style="top:730;left:162">
<span id="_10.1" style="font-style:italic; font-family:Times New Roman; font-size:10.1px; color:#221f1f">
Satellites, Ultra HD, M2M, and IP<span style="font-style:normal"> , First Edition. Daniel Minoli. &#169; 2015 John Wiley & Sons, Inc. Published 2015 by John </span></span>
</div>
<div class="pos" id="_162:741" style="top:741;left:162">
<span id="_10.1" style=" font-family:Times New Roman; font-size:10.1px; color:#221f1f">
Wiley & Sons, Inc.</span>
</div>
<div class="pos" id="_268:754" style="top:754;left:268">
<span id="_11.4" style="font-weight:bold; font-family:Times New Roman; font-size:11.4px; color:#221f1f">
52 <span id="_10.1" style="font-weight:normal; font-size:10.1px"> DVB-S2 MODULATION EXTENSIONS AND OTHER ADVANCES </span></span>
</div>
<div class="pos" id="_160:786" style="top:786;left:160">
<span id="_12.8" style=" font-family:Times New Roman; font-size:12.8px; color:#221f1f">
extensions known as DVB-S2X. The last part of the chapter briefly covers Carrier ID. The concept </span>
</div>
<div class="pos" id="_160:801" style="top:801;left:160">
<span id="_12.8" style=" font-family:Times New Roman; font-size:12.8px; color:#221f1f">
of Intelligent Inverse Multiplexing for satellite applications is also discussed. Brief mention is made </span>
</div>
<div class="pos" id="_160:816" style="top:816;left:160">
<span id="_12.8" style=" font-family:Times New Roman; font-size:12.8px; color:#221f1f">
of  High  Efficiency  Video  Coding  (HEVC)/ITU-T  H.265,  as  another  aspect  of  ground-related </span>
</div>
<div class="pos" id="_160:831" style="top:831;left:160">
<span id="_12.8" style=" font-family:Times New Roman; font-size:12.8px; color:#221f1f">
advances expected to impact the industry (a topic discussed in greater details in Chapter 6). </span>
</div>
<div class="pos" id="_160:880" style="top:880;left:160">
<span id="_12.8" style="font-weight:bold; font-family:Times New Roman; font-size:12.8px; color:#221f1f">
2.1 PART 1: A REVIEW OF MODULATION AND FEC PRINCIPLES </span>
</div>
<div class="pos" id="_160:912" style="top:912;left:160">
<span id="_12.8" style=" font-family:Times New Roman; font-size:12.8px; color:#221f1f">
We review some fundamental technical principles in this introductory section, before looking at </span>
</div>
<div class="pos" id="_160:927" style="top:927;left:160">
<span id="_12.8" style=" font-family:Times New Roman; font-size:12.8px; color:#221f1f">
the latest advancements in this arena. </span>
</div>
<div class="pos" id="_160:971" style="top:971;left:160">
<span id="_12.8" style="font-weight:bold; font-family:Times New Roman; font-size:12.8px; color:#221f1f">
2.1.1 <span style="font-style:italic"> E</span> /<span style="font-style:italic"> N</span> Concepts </span>
</div>
<div class="pos" id="_199:975" style="top:975;left:199">
<span id="_10.8" style="font-weight:bold; font-family:Times New Roman; font-size:10.8px; color:#221f1f">
b o </span>
</div>

<div class="pos" id="_160:1219" style="top:1219;left:160">
<span id="_13.2" style=" font-family:Times New Roman; font-size:13.2px; color:#221f1f">
to noise power spectral density measured in decibel, is a com monly used parameter to compare </span>
</div>
<div class="pos" id="_160:1233" style="top:1233;left:160">
<span id="_13.2" style=" font-family:Times New Roman; font-size:13.2px; color:#221f1f">
digital systems, namely, modulation outcomes. Key impairments that impact demodulation are the </span>
</div>
<div class="pos" id="_160:1248" style="top:1248;left:160">
<span id="_13.2" style=" font-family:Times New Roman; font-size:13.2px; color:#221f1f">
following (refer to the Glossary for the definition of these terms): </span>
</div>
<div class="pos" id="_178:1280" style="top:1280;left:178">
<span id="_13.2" style=" font-family:Arial; font-size:13.2px; color:#221f1f">
<li type="square"> <span style=" font-family:Times New Roman"> Additive Gaussian noise </span></span>
</div>
<div class="pos" id="_178:1299" style="top:1299;left:178">
<span id="_13.2" style=" font-family:Arial; font-size:13.2px; color:#221f1f">
<li type="square"> <span style=" font-family:Times New Roman"> Amplitude imbalance </span></span>
</div>
<div class="pos" id="_178:1317" style="top:1317;left:178">
<span id="_13.2" style=" font-family:Arial; font-size:13.2px; color:#221f1f">
<li type="square"> <span style=" font-family:Times New Roman"> Carrier suppression or leakage </span></span>
</div>
<div class="pos" id="_178:1335" style="top:1335;left:178">
<span id="_13.2" style=" font-family:Arial; font-size:13.2px; color:#221f1f">
<li type="square"> <span style=" font-family:Times New Roman"> Interferers </span></span>
</div>
<div class="pos" id="_178:1354" style="top:1354;left:178">
<span id="_12.8" style=" font-family:Arial; font-size:12.8px; color:#221f1f">
<li type="square"> <span style=" font-family:Times New Roman"> Phase error </span></span>
</div>
<div class="pos" id="_178:1372" style="top:1372;left:178">
<span id="_12.8" style=" font-family:Arial; font-size:12.8px; color:#221f1f">
<li type="square"> <span style=" font-family:Times New Roman"> Phase jitter and/or phase noise </span></span>
</div>
<div class="pos" id="_177:1404" style="top:1404;left:177">
<span id="_13.4" style=" font-family:Times New Roman; font-size:13.4px; color:#221f1f">
If the input signal is distorted or greatly attenuated (e.g., see Figure 2.1), the receiver can no </span>
</div>
<div class="pos" id="_160:1420" style="top:1420;left:160">
<span id="_13.4" style=" font-family:Times New Roman; font-size:13.4px; color:#221f1f">
longer recover the symbol clock, demodulate the signal, and/or recover the information. In some </span>
</div>
<div class="pos" id="_160:1435" style="top:1435;left:160">
<span id="_13.4" style=" font-family:Times New Roman; font-size:13.4px; color:#221f1f">
cases, a symbol will fall far away from its intended constellation position that it will cross over to </span>
</div>
<div class="pos" id="_160:1450" style="top:1450;left:160">
<span id="_13.4" style=" font-family:Times New Roman; font-size:13.4px; color:#221f1f">
an adjacent position; the in-phase (<span style="font-style:italic"> I) </span> and quadrature <span style="font-style:italic"> (Q) </span> level detectors used in the demodulator </span>
</div>
<div class="pos" id="_160:1465" style="top:1465;left:160">
<span id="_13.4" style=" font-family:Times New Roman; font-size:13.4px; color:#221f1f">
would misinterpret such a symbol as being in the wrong location, resulting in bit errors. In this </span>
</div>
<div class="pos" id="_160:1480" style="top:1480;left:160">
<span id="_13.4" style=" font-family:Times New Roman; font-size:13.4px; color:#221f1f">
context, note that Quadrature Phase Shift Keying (QPSK) is not as spectrally efficient as, say, 8-</span>
</div>
<div class="pos" id="_160:1495" style="top:1495;left:160">
<span id="_13.4" style=" font-family:Times New Roman; font-size:13.4px; color:#221f1f">
PSK or 16-QAM (Quadrature Amplitude Modulation), but the modulation states are much farther </span>
</div>
<div class="pos" id="_160:1510" style="top:1510;left:160">
<span id="_12.9" style=" font-family:Times New Roman; font-size:12.9px; color:#221f1f">
apart and the system can thus tolerate a lot more noise before suffering symbol errors</span>
</div>
</nowrap></nobr>


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