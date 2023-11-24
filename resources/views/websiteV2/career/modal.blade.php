@include('websiteV2.career.css')
  <!-- Modal -->

    <div class="modal fade" id="career{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">{{$item->career_title}}</h3>
            </div>
            <div class="modal-body">`
                <?php if ($item->career_title == "Senior Training & Talent Development Specialist") { ?>
                    <div class="container">
                        <h5>Duties & Responsibilities</h5>
                        <h6><b>Talent Development</b></h6>
                        <ul>
                            <li class="text-12">Planning and coordinating company-wide training programs for employees to ensure that they are meeting current industry standards.</li>
                            <li class="text-12">Reviewing employee performance records to assess individual employee performance and coach them on how to improve performance in specific areas.</li>
                            <li class="text-12">Analyzing data and trends to identify areas where employee performance can be improved or where there is a high rate of turnover.</li>
                            <li class="text-12">Working with HR & Admin Manager to develop new employee orientation programs and policies to promote a positive work environment.</li>
                            <li class="text-12">Meeting with managers to assess individual employee performance and coach them on how to improve performance in specific areas.</li>
                            <li class="text-12">Developing and implementing training programs for new employees to help them become productive members of the team more rapidly.</li>
                            <li class="text-12">Coordinating with outside vendors to provide services such as computer skills training or business writing classes.</li>
                            <li class="text-12">Creating training materials such as manuals, videos, and presentations to be used during training sessions.</li>
                        </ul>

                        <h6><b>Training</b></h6>
                        <ul>
                            <li class="text-12">Develop training programs that address specific business needs.</li>
                            <li class="text-12">Develop training manuals that target tangible results.</li>
                            <li class="text-12">Create a curriculum to facilitate strategic training based on the organizations goals.</li>
                            <li class="text-12">Manage the method and technical personnel required to develop, manage and deliver training…etc.</li>
                            <li class="text-12">Develop training manuals that target tangible results.</li>
                            <li class="text-12">Implement effective and purposeful training methods.</li>
                            <li class="text-12">Effectively manage the training budget.</li>
                            <li class="text-12">Evaluate organizational performance to ensure that training is meeting business needs and improving performance.</li>
                            <li class="text-12">Assess employees’ skills, performance and productivity to identify areas of improvement.</li>
                        </ul>

                        <h6><b>Performance Management</b></h6>
                        <ul>
                            <li class="text-12">Identifying training needs for employees to ensure that they are adequately equipped to perform their jobs effectively.</li>
                            <li class="text-12">Ensuring that the department is aligned with the company’s strategic goals and objectives.</li>
                            <li class="text-12">Conducting regular performance evaluations of individual employees or groups of employees to measure their progress toward meeting goals and achieving objectives.</li>
                            <li class="text-12">Providing coaching and feedback to employees on how they can improve their performance.</li>
                            <li class="text-12">Evaluating employee performance (only in both training & talent development)
                            <li class="text-12">Creating employee evaluation forms and conducting performance evaluations.</li>
                            <li class="text-12">Coordinating in hiring decisions by conducting interviews with candidates and reviewing resumes and applications.</li>
                        </ul>

                        <h6><b>Assist in Recruitment</b></h6>
                        <ul>
                            <li class="text-12">Assist to design and implement overall recruiting strategy.</li>
                            <li class="text-12">Assist to develop and update job descriptions and job specifications.</li>
                            <li class="text-12">Assist to perform job and task analysis to document job requirements and objectives.</li>
                            <li class="text-12">Assist to prepare recruitment materials and post jobs to appropriate job board/recruitment website/colleges etc.</li>
                            <li class="text-12">Assist to source and recruit candidates by using databases, social media etc.</li>
                            <li class="text-12">Assist to screen candidates resumes and job applications for junior applicants.</li>
                            <li class="text-12">Assist to conduct interviews using various reliable recruiting and selection tools/methods to filter candidates within schedule.</li>
                            <li class="text-12">Assist to assess applicants’ relevant knowledge, skills, soft skills, experience and aptitudes.</li>
                            <li class="text-12">Assist to onboard new employees in order to become fully integrated.</li>
                            <li class="text-12">Assist to monitor and apply HR recruiting best practices.</li>
                        </ul>

                        <h5>Qualification / Requirements</h5>
                        <ul>
                            <li class="text-12"> Student with a minimum finish Bachelor Degree.</li>
                            <li class="text-12">At least 2 experiences with training both hard/soft skill and administration field.</li>
                            <li class="text-12">Good command of both written & spoken in Khmer-English.</li>
                            <li class="text-12">Good personalities with highly working commitment.</li>
                            <li class="text-12">Willing to improve yourself.</li>
                            <li class="text-12">Loyalty and respect company rule, regulation and policies.</li>
                        </ul>

                        <h5>Benefit</h5>
                        <ul>
                            <li class="text-12"> 5.5 Days/week.</li>
                            <li class="text-12">Competitive Salary.</li>
                            <li class="text-12">13 months’ salary.</li>
                            <li class="text-12">Allowance + Incentive.</li>
                            <li class="text-12">Public Holiday, Special Leave & Sick Leave.</li>
                            <li class="text-12">Annual Leave 18 Days.</li>
                            <li class="text-12">Yearly Salary Increment.</li>
                            <li class="text-12">Insurance.</li>
                        </ul>
                    </div>
                <?php } ?>

                <?php if ($item->career_title == "Internal Auditor") { ?>
                    no hi
                <?php } ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn-modal btn" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

