<?php
require("../utils/check_session.php");
require("../utils/show_popup.php");
require("../utils/menu.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta
		content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"
		name="viewport">
	<title>CPP Module 07 correction</title>
	<link rel="shortcut icon" href="<?php echo htmlspecialchars($prefix); ?>assets/favicons/favicon_no-bg.ico" type="image/x-icon">
	<link href="<?php echo htmlspecialchars($prefix); ?>css/styles.css" media="all" rel="stylesheet" />
	<link rel="manifest" href="<?php echo htmlspecialchars($prefix); ?>manifest.json">
	<script src="<?php echo htmlspecialchars($prefix); ?>js/script.js"></script>
	<script src="<?php echo htmlspecialchars($prefix); ?>js/js"></script>
	<script src="<?php echo htmlspecialchars($prefix); ?>js/main.js"></script>
</head>

<body>
	<script>
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('../../js/service-worker.js')
				.then(function (registration) {
					console.log('Service Worker registered successfully:', registration);
				})
				.catch(function (error) {
					console.log('Service Worker registration failed:', error);
				});
		}
	</script>
	<?php require("../utils/menu_div.php"); ?>
	<div class="container-item scale-team-container">
		<div class="row mt-4">
			<div class="scale-section-infos col-sm-12 scale-div">
				<h3 class="font-weight-bold text-uppercase text-center mt-4 pt-4">
					Scale for project

					<a href="https://projects.intra.42.fr/projects/cpp-module-07">CPP Module 07</a>
				</h3>
				<h5 class="text-muted text-center">You should evaluate 1 student in this team</h5>

				<hr>
				<div class="p-0 scale-introduction dancer from-down" id="introduction-24660">
					<h3 class="font-weight-bold mb-1">Introduction</h3>
					<p>
						Please comply with the following rules:<br><br>- Remain polite, courteous, respectful and
						constructive
						throughout the <br> evaluation process. The well-being of the community depends on it.<br><br>-
						Identify with the student or group whose work is evaluated the possible <br> dysfunctions in
						their
						project. Take the time to discuss and debate the <br> problems that may have been
						identified.<br><br>-
						You must consider that there might be some differences in how your peers <br> might have
						understood
						the project's instructions and the scope of its <br> functionalities. Always keep an open mind
						and
						grade them as honestly as <br> possible. The pedagogy is useful only and only if the
						peer-evaluation
						is <br> done seriously.<br>
					</p>
				</div>
				<div class="p-0 scale-guidelines dancer from-down" id="guidelines-24660">
					<h3 class="font-weight-bold mb-1">Guidelines</h3>
					<p>
						- Only grade the work that was turned in the Git repository of the evaluated <br> student or
						group.<br><br>- Double-check that the Git repository belongs to the student(s). Ensure that <br>
						the
						project is the one expected. Also, check that 'git clone' is used in an <br> empty
						folder.<br><br>-
						Check carefully that no malicious aliases was used to fool you and make you <br> evaluate
						something
						that is not the content of the official repository.<br><br>- To avoid any surprises and if
						applicable,
						review together any scripts used <br> to facilitate the grading (scripts for testing or
						automation).<br><br>- If you have not completed the assignment you are going to evaluate, you
						have
						<br> to read the entire subject prior to starting the evaluation process.<br><br>- Use the
						available
						flags to report an empty repository, a non-functioning <br> program, a Norm error, cheating, and
						so
						forth. <br> In these cases, the evaluation process ends and the final grade is 0, <br> or -42 in
						case
						of cheating. However, except for cheating, student are <br> strongly encouraged to review
						together the
						work that was turned in, in order <br> to identify any mistakes that shouldn't be repeated in
						the
						future.<br><br>- You should never have to edit any file except the configuration file if it <br>
						exists. If you want to edit a file, take the time to explicit the reasons <br> with the
						evaluated
						student and make sure both of you are okay with this.<br><br>- You must also verify the absence
						of
						memory leaks. Any memory allocated on <br> the heap must be properly freed before the end of
						execution. <br> You are allowed to use any of the different tools available on the computer,
						<br> such
						as leaks, valgrind, or e_fence. In case of memory leaks, tick the <br> appropriate flag.<br>
					</p>
				</div>

				<hr>
				<div class="dancer from-down" id="attachments-24660">
					<h3 class="font-weight-bold mb-1">Attachments</h3>
					<div class="project-attachments-list">
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">ex00.cpp</a>
							</h4>
						</div>
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">ex01.cpp</a>
							</h4>
						</div>
					</div>

					<div class="project-attachments-list">
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">subject.pdf</a>
							</h4>
						</div>
						<div class="project-attachment-item">
							<h4 class="attachment-name">
								<span class="icon-file"></span>
								<a target="_blank" href="https://github.com/rphlr/42-Subjects/">main.cpp</a>
							</h4>
						</div>
					</div>

				</div>

			</div>
			<form class="simple_form form-horizontal" novalidate="novalidate" id="edit_scale_team_5552994"
				action="https://projects.intra.42.fr/projects/cpp-module-07/project_sessions/3331/evaluations/1608/scales/24660/scale_teams/5552994"
				accept-charset="UTF-8" method="post">
				<div class="scale-section-answers col-sm-12 scale-div">
					<section class="scale-section-item dancer from-down" id="section-69407">
						<div class="section-header">
							<h3 class="font-weight-bold mb-1">Preliminary tests</h3>
							<p class="font-italic">If cheating is suspected, the evaluation stops here. Use the "Cheat"
								flag to
								report it. Take this decision calmly, wisely, and please, use this button with caution.
							</p>
						</div>
						<h4 class="scale-question-name">Prerequisites</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>The code must compile with c++ and the flags -Wall -Wextra -Werror<br>
							Don't forget this project has to follow the C++98 standard. Thus, <br>
							C++11 (and later) functions or containers are NOT expected.</p>

						<p>Any of these means you must not grade the exercise in question:</p>

						<ul>
							<li>A function is implemented in a header file (except for template
								functions).</li>
							<li>A Makefile compiles without the required flags and/or another
								compiler than c++.</li>
						</ul>

						<p>Any of these means that you must flag the project with "Forbidden <br>
							Function":</p>

						<ul>
							<li>Use of a "C" function (*alloc, *printf, free).</li>
							<li>Use of a function not allowed in the exercise guidelines.</li>
							<li>Use of "using namespace &lt;ns_name&gt;" or the "friend" keyword.</li>
							<li>Use of an external library, or features from versions other than
								C++98.</li>
						</ul>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][0][value]"
									id="radio_[scale_team][answers_attributes][0]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][0]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][0][value]"
									id="radio_[scale_team][answers_attributes][0]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][0]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
					<section class="scale-section-item dancer from-down" id="section-69408">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 00: Start with a few functions</h3>
							<p class="font-italic">This exercise is about writing 3 simple function templates: swap(),
								min()
								and max().
							</p>
						</div>
						<h4 class="scale-question-name">Simple types</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Refer to the subject for the expected output with simple types, such <br>
							as int.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][1][value]"
									id="radio_[scale_team][answers_attributes][1]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][1]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][1][value]"
									id="radio_[scale_team][answers_attributes][1]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][1]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Complex types</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Do the functions also work with complex types? (check with the ex00.cpp file in attachment)
						</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][2][value]"
									id="radio_[scale_team][answers_attributes][2]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][2]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][2][value]"
									id="radio_[scale_team][answers_attributes][2]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][2]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
					<section class="scale-section-item dancer from-down" id="section-69409">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 01: Iter</h3>
							<p class="font-italic">This exercise is about writing a generic function to iterate through
								arrays.
							</p>
						</div>
						<h4 class="scale-question-name">Does it work?</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Test the code ex01.cpp (in attachments) with the iter of the evaluated student.<br>
							If everything went well, it should display:</p>

						<pre><code>0
  1
  2
  3
  4
  42
  42
  42
  42
  42
  </code></pre>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][3][value]"
									id="radio_[scale_team][answers_attributes][3]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][3]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][3][value]"
									id="radio_[scale_team][answers_attributes][3]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][3]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
					<section class="scale-section-item dancer from-down" id="section-69410">
						<div class="section-header">
							<hr>
							<h3 class="font-weight-bold mb-1">Exercise 02: Array</h3>
							<p class="font-italic">This exercise is about writing a class template that behaves like an
								array.
								If the inner allocation of the actual array does not come from a use of
								new[], don't grade this exercise.
								Ask the evaluated student to prove the class template works with arrays of
								both simple and complex types before grading the exercise.
							</p>
						</div>
						<h4 class="scale-question-name">Constructors</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Is it possible to create an empty array and an array of a specific size?</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][4][value]"
									id="radio_[scale_team][answers_attributes][4]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][4]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][4][value]"
									id="radio_[scale_team][answers_attributes][4]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][4]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
						<h4 class="scale-question-name">Access</h4>
						<p class="scale-section-guidelines">
						</p>
						<p>Elements must be accessible for reading and writing through the operator[] <br>
							(or reading only if the instance is const). Access to an element which is <br>
							out of range must throw an std::exception.</p>

						<p></p>
						<div class="scale-question-answers">
							<div class="form-group hidden scale_team_answer_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="form-group hidden scale_team_answer_question_id">
								<div class="col-sm-10"></div>
							</div>
							<div class="btn-group block">
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][5][value]"
									id="radio_[scale_team][answers_attributes][5]_true" type="radio" value="1">
								<label class="btn btn-success checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][5]_true">
									<span class="icon-check"></span>
									Yes
								</label>
								<input autocomplete="off" class="checkbox-input"
									name="[scale_team][answers_attributes][5][value]"
									id="radio_[scale_team][answers_attributes][5]_false" type="radio" value="0"
									checked="checked">
								<label class="btn btn-danger checkbox-label light-bg"
									for="radio_[scale_team][answers_attributes][5]_false">
									<span class="icon-times"></span>
									No
								</label>
							</div>
						</div>
					</section>
				</div>
				<div class="col-sm-12 scale-div pb-4">
					<div class="dancer from-down" id="ratings-24660">
						<h3 class="font-weight-bold mb-1">Ratings</h3>
						<p class="marked-title">Don’t forget to check the flag corresponding to the defense</p>
						<div class="btn-group block flags-buttons" data-radio-item="flag-small">
							<label class="btn btn-default btn-success label_flag_ok on-active positive"
								for="scale_team_flag_id_1" name="scale_team[flag_id]">
								<span class="iconf-check-4"></span>
								Ok
							</label>
							<label class="btn btn-default btn-success label_flag_outstanding_project on-active positive"
								for="scale_team_flag_id_9" name="scale_team[flag_id]">
								<span class="iconf-star-1"></span>
								Outstanding project
							</label>
						</div>
						<div class="btn-group block flags-buttons" data-radio-item="flag-small">
							<label class="btn btn-danger btn-default label_flag_empty_work negative on-active"
								for="scale_team_flag_id_2" name="scale_team[flag_id]">
								<span class="iconf-iconf-folder-1"></span>
								Empty work
							</label>
							<label class="btn btn-danger btn-default label_flag_incomplete_work negative on-active"
								for="scale_team_flag_id_3" name="scale_team[flag_id]">
								<span class="iconf-file-attention"></span>
								Incomplete work
							</label>
							<label class="btn btn-danger btn-default label_flag_invalid_compilation negative on-active"
								for="scale_team_flag_id_5" name="scale_team[flag_id]">
								<span class="iconf-skull-2"></span>
								Invalid compilation
							</label>
							<label class="btn btn-danger btn-default label_flag_cheat negative on-active"
								for="scale_team_flag_id_7" name="scale_team[flag_id]">
								<span class="iconf-layers"></span>
								Cheat
							</label>
							<label class="btn btn-danger btn-default label_flag_crash negative on-active"
								for="scale_team_flag_id_8" name="scale_team[flag_id]">
								<span class="iconf-bomb"></span>
								Crash
							</label>
							<label class="btn btn-danger btn-default label_flag_concerning_situation negative on-active"
								for="scale_team_flag_id_11" name="scale_team[flag_id]">
								<span class="iconf-alert-2"></span>
								Concerning situation
							</label>
							<label class="btn btn-danger btn-default label_flag_leaks negative on-active"
								for="scale_team_flag_id_12" name="scale_team[flag_id]">
								<span class="iconf-blood"></span>
								Leaks
							</label>
							<label class="btn btn-danger btn-default label_flag_forbidden_function negative on-active"
								for="scale_team_flag_id_13" name="scale_team[flag_id]">
								<span class="iconf-delete-2"></span>
								Forbidden function
							</label>
							<label
								class="btn btn-danger btn-default label_flag_can’t_support_/_explain_code negative on-active"
								for="scale_team_flag_id_14" name="scale_team[flag_id]">
								<span class="iconf-bubble-attention-4"></span>
								Can’t support / explain code
							</label>
						</div>
					</div>

				</div>
				<div class="scale-final-submit"><a href="https://github.com/rphlr/42-Evals">
						<input class="btn btn-primary btn-block font-weight-bold" type="button"
							value="Give this repository a star. ⭐" /></a>
				</div>
			</form>
</body>

</html>