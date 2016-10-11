<?php

function calendar($m, $y) {
	$first = 1;

	$number = date("d");
	//วันที่เท่าไหร่

	$info = cal_days_in_month(CAL_GREGORIAN, $m, $y);
	// เดือนนี้มีกี่วัน

	$cur = strtotime($m . "/" . $first . "/" . $y);

	$day = date("w", $cur);

	if ($info == 30) {

		//วันที่ 1 ของเดือนเป็นวันอะไร
		switch ($day) {
			case "0" :
				// echo "Sunday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "1" :
				//echo "Monday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "2" :
				//echo "Tuesday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "3" :
				//echo "Wednesday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "4" :
				//echo "Thrusday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "5" :
				//echo "Friday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
									</tr>
									
												');
				break;
			case "6" :
				//echo "Saturday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
		}

	} else if ($info == 31) {
		//วันที่ 1 ของเดือนเป็นวันอะไร
		switch ($day) {
			case "0" :
				//echo "Sunday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-31">31</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "1" :
				//echo "Monday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-31">31</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "2" :
				//echo "Tuesday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-31">31</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "3" :
				//echo "Wednesday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-31">31</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "4" :
				//echo "Thrusday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-31">31</td>
									</tr>
												');
				break;
			case "5" :
				//echo "Friday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-31">31</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "6" :
				//echo "Saturday";
				echo('
										<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-30">30</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-31">31</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
		}

	}else if ($info == 29) {
		//วันที่ 1 ของเดือนเป็นวันอะไร
		switch ($day) {
			case "0" :
				//echo "Sunday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "1" :
				//echo "Monday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "2" :
				//echo "Tuesday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "3" :
				//echo "Wednesday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "4" :
				//echo "Thrusday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "5" :
				//echo "Friday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
								
												');
				break;
			case "6" :
				//echo "Saturday";
				echo('
										<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-29">29</td>
									</tr>
									
												');
				break;
		}

	}else if ($info == 28) {
		//วันที่ 1 ของเดือนเป็นวันอะไร
		switch ($day) {
			case "0" :
				//echo "Sunday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
									</tr>
									
												');
				break;
			case "1" :
				//echo "Monday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "2" :
				//echo "Tuesday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "3" :
				//echo "Wednesday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "4" :
				//echo "Thrusday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
												');
				break;
			case "5" :
				//echo "Friday";
				echo('
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
								
												');
				break;
			case "6" :
				//echo "Saturday";
				echo('
										<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-01">1</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-02">2</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-03">3</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-04">4</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-05">5</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-06">6</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-07">7</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-08">8</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-09">9</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-10">10</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-11">11</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-12">12</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-13">13</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-14">14</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-15">15</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-16">16</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-17">17</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-18">18</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-19">19</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-20">20</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-21">21</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-22">22</td>
									</tr>
									<tr class="DayPicker-week">
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-23">23</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-24">24</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-25">25</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-26">26</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-27">27</td>
										<td id="number" class="DayPicker-day DayPicker-day--available" data-date="'. $y .'-'.$m.'-28">28</td>
										<td id="number" class="DayPicker-day DayPicker-day--outside"></td>
									</tr>
									
												');
				break;
		}

	}
} // end

?>