@extends('webv2-layout')
@section('css')
    <link rel="stylesheet" href="../css/hub5/css/demo/start-hub-5/start-hub-5-start.css">
@endsection

@section('js_vendor')
    <script src="../css/hub5/vendors/particles.min.js"></script>
@endsection

@section('js_page')
@endsection
<style>
    .text-white{
        color: black !important;
    }
    .mobile-lineheight{
        line-height: 2;
    }
    .row{
        color: black
    }
    ul{
        line-height: 2em;
    }
</style>
@section('content')
<div id="lqd-contents-wrap">
    <section class="lqd-section webinar " id="nipponcambodia">
        <div class="titlebar-inner">
            <div class="container titlebar-container mt-100">
                <div class="row titlebar-container justify-center">
                    <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                        <h2>Career</h2>
                        {{-- <p class="leading-20 text-gray-400">Our Project Reference</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @foreach ($career_id as $item)
            <?php if ($item->career_title == "Senior Training & Talent Development Specialist") { ?>
                <h6><b>Description</b></h6>
                <div class="container text-16 mobile-lineheight mb-100">
                    <div class="row">
                        <div class="col col-2"><b>Position:</b></div>
                        <div class="col">{{$item->career_position}}</div>
                        <div class="col col-2"><b>Report To:</b></div>
                        <div class="col">{{$item->career_report_to}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Gender:</b></div>
                        <div class="col">{{$item->career_gender}}</div>
                        <div class="col col-2"><b>Salary:</b></div>
                        <div class="col">Negotiable</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Job Type:</b></div>
                        <div class="col">Full Time</div>
                        <div class="col col-2"><b>Work Place:</b></div>
                        <div class="col">{{$item->career_location}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Hiring:</b></div>
                        <div class="col">{{$item->career_hiring}}</div>
                        <div class="col col-2"><b>Working Day:</b></div>
                        <div class="col">5.5 Days/week</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Publish Date:</b></div>
                        <div class="col">{{$item->career_date}}</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="container">
                    <br><br>
                    <h5>Duties & Responsibilities</h5>
                    <br><br>
                    <h6><b>Talent Development</b></h6>
                    <ul>
                        <li class="text-16">Planning and coordinating company-wide training programs for employees to ensure that they are meeting current industry standards.</li>
                        <li class="text-16">Reviewing employee performance records to assess individual employee performance and coach them on how to improve performance in specific areas.</li>
                        <li class="text-16">Analyzing data and trends to identify areas where employee performance can be improved or where there is a high rate of turnover.</li>
                        <li class="text-16">Working with HR & Admin Manager to develop new employee orientation programs and policies to promote a positive work environment.</li>
                        <li class="text-16">Meeting with managers to assess individual employee performance and coach them on how to improve performance in specific areas.</li>
                        <li class="text-16">Developing and implementing training programs for new employees to help them become productive members of the team more rapidly.</li>
                        <li class="text-16">Coordinating with outside vendors to provide services such as computer skills training or business writing classes.</li>
                        <li class="text-16">Creating training materials such as manuals, videos, and presentations to be used during training sessions.</li>
                    </ul>

                    <h6><b>Training</b></h6>
                    <ul>
                        <li class="text-16">Develop training programs that address specific business needs.</li>
                        <li class="text-16">Develop training manuals that target tangible results.</li>
                        <li class="text-16">Create a curriculum to facilitate strategic training based on the organizations goals.</li>
                        <li class="text-16">Manage the method and technical personnel required to develop, manage and deliver training…etc.</li>
                        <li class="text-16">Develop training manuals that target tangible results.</li>
                        <li class="text-16">Implement effective and purposeful training methods.</li>
                        <li class="text-16">Effectively manage the training budget.</li>
                        <li class="text-16">Evaluate organizational performance to ensure that training is meeting business needs and improving performance.</li>
                        <li class="text-16">Assess employees’ skills, performance and productivity to identify areas of improvement.</li>
                    </ul>

                    <h6><b>Performance Management</b></h6>
                    <ul>
                        <li class="text-16">Identifying training needs for employees to ensure that they are adequately equipped to perform their jobs effectively.</li>
                        <li class="text-16">Ensuring that the department is aligned with the company’s strategic goals and objectives.</li>
                        <li class="text-16">Conducting regular performance evaluations of individual employees or groups of employees to measure their progress toward meeting goals and achieving objectives.</li>
                        <li class="text-16">Providing coaching and feedback to employees on how they can improve their performance.</li>
                        <li class="text-16">Evaluating employee performance (only in both training & talent development)
                        <li class="text-16">Creating employee evaluation forms and conducting performance evaluations.</li>
                        <li class="text-16">Coordinating in hiring decisions by conducting interviews with candidates and reviewing resumes and applications.</li>
                    </ul>

                    <h6><b>Assist in Recruitment</b></h6>
                    <ul>
                        <li class="text-16">Assist to design and implement overall recruiting strategy.</li>
                        <li class="text-16">Assist to develop and update job descriptions and job specifications.</li>
                        <li class="text-16">Assist to perform job and task analysis to document job requirements and objectives.</li>
                        <li class="text-16">Assist to prepare recruitment materials and post jobs to appropriate job board/recruitment website/colleges etc.</li>
                        <li class="text-16">Assist to source and recruit candidates by using databases, social media etc.</li>
                        <li class="text-16">Assist to screen candidates resumes and job applications for junior applicants.</li>
                        <li class="text-16">Assist to conduct interviews using various reliable recruiting and selection tools/methods to filter candidates within schedule.</li>
                        <li class="text-16">Assist to assess applicants’ relevant knowledge, skills, soft skills, experience and aptitudes.</li>
                        <li class="text-16">Assist to onboard new employees in order to become fully integrated.</li>
                        <li class="text-16">Assist to monitor and apply HR recruiting best practices.</li>
                    </ul>
                    <br><br>
                    <h5>Qualification / Requirements</h5>
                    <br><br>
                    <ul>
                        <li class="text-16"> Student with a minimum finish Bachelor Degree.</li>
                        <li class="text-16">At least 2 experiences with training both hard/soft skill and administration field.</li>
                        <li class="text-16">Good command of both written & spoken in Khmer-English.</li>
                        <li class="text-16">Good personalities with highly working commitment.</li>
                        <li class="text-16">Willing to improve yourself.</li>
                        <li class="text-16">Loyalty and respect company rule, regulation and policies.</li>
                    </ul>

                    <br><br>
                    <h5>Benefit</h5>
                    <br><br>
                    <ul>
                        <li class="text-16"> 5.5 Days/week.</li>
                        <li class="text-16">Competitive Salary.</li>
                        <li class="text-16">13 months’ salary.</li>
                        <li class="text-16">Allowance + Incentive.</li>
                        <li class="text-16">Public Holiday, Special Leave & Sick Leave.</li>
                        <li class="text-16">Annual Leave 18 Days.</li>
                        <li class="text-16">Yearly Salary Increment.</li>
                        <li class="text-16">Insurance.</li>
                    </ul>
                </div>
            <?php } ?>

            <?php if ($item->career_title == "Internal Auditor") { ?>
                <h6><b>Description</b></h6>
                <div class="container text-16 mobile-lineheight">
                    <div class="row">
                        <div class="col col-2"><b>Position:</b></div>
                        <div class="col">{{$item->career_position}}</div>
                        <div class="col col-2"><b>Report To:</b></div>
                        <div class="col">{{$item->career_report_to}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Gender:</b></div>
                        <div class="col">{{$item->career_gender}}</div>
                        <div class="col col-2"><b>Salary:</b></div>
                        <div class="col">Negotiable</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Job Type:</b></div>
                        <div class="col">Full Time</div>
                        <div class="col col-2"><b>Work Place:</b></div>
                        <div class="col">{{$item->career_location}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Hiring:</b></div>
                        <div class="col">{{$item->career_hiring}}</div>
                        <div class="col col-2"><b>Working Day:</b></div>
                        <div class="col">5.5 Days/week</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Publish Date:</b></div>
                        <div class="col">{{$item->career_date}}</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <br><br>
                <h5>Duties & Responsibilities</h5>
                <br><br>
                <h6><b>Talent Development</b></h6>
                <ul>
                    <li class="text-16">Plan effective auditing processes.</li>
                    <li class="text-16">Inspecting financial statements to catch errors, misstatements and fraud.</li>
                    <li class="text-16">Performing audits on systems, operations and accounts.</li>
                    <li class="text-16">Reporting audit findings and recommending improvements.</li>
                    <li class="text-16">Audit financial statements and assess accounts for accuracy and regulatory compliance.</li>
                    <li class="text-16">Inspect internal systems and controls.</li>
                    <li class="text-16">Assess risk management tactics.</li>
                    <li class="text-16">Report systematic errors or fraud indicators.</li>
                    <li class="text-16">Investigate specific issues regulatory bodies bring forward.</li>
                    <li class="text-16">Explain audit findings and recommend solutions.</li>
                    <li class="text-16">Others Task & duties as assigned by management.</li>
                </ul>

                <br><br>
                <h5>Qualification / Requirements</h5>
                <br><br>
                <ul>
                    <li class="text-16">CPA license, BSc/BA in Accounting, Finance or relevant field.</li>
                    <li class="text-16">Proven experience as an Auditor.</li>
                    <li class="text-16">Experience in data analysis and financial reporting.</li>
                    <li class="text-16">Knowledge of auditing practices and relevant regulations.</li>
                    <li class="text-16">Knowledge of accounting standards and Tax Declaration.</li>
                    <li class="text-16">Excellent verbal and written communication skills.</li>
                    <li class="text-16">Sound judgement and decision-making ability.</li>
                    <li class="text-16">Strong organizational skills.</li>
                </ul>

                <br><br>
                <h5>Benefit</h5>
                <br><br>
                <ul>
                    <li class="text-16">Competitive Salary + Allowance and Incentive.</li>
                    <li class="text-16">13th salary (Bonus Angpao before Chinese).</li>
                    <li class="text-16">Public Holiday, Special Leave & Sick Leave.</li>
                    <li class="text-16">Annual Leave 18 Days.</li>
                    <li class="text-16">Maternity Leave.</li>
                    <li class="text-16">Yearly Salary Incremental.</li>
                    <li class="text-16">Insurance.</li>
                </ul>
            <?php } ?>

            <?php if ($item->career_title == "ASM") { ?>
                <h6><b>Description</b></h6>
                <div class="container text-16 mobile-lineheight">
                    <div class="row">
                        <div class="col col-2"><b>Position:</b></div>
                        <div class="col">ASM</div>
                        <div class="col col-2"><b>Report To:</b></div>
                        <div class="col">Sales Manager</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Gender:</b></div>
                        <div class="col">Male</div>
                        <div class="col col-2"><b>Salary:</b></div>
                        <div class="col">Negotiable</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Job Type:</b></div>
                        <div class="col">Full Time</div>
                        <div class="col col-2"><b>Work Place:</b></div>
                        <div class="col">Phnom Penh & Province</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Hiring:</b></div>
                        <div class="col">2</div>
                        <div class="col col-2"><b>Working Day:</b></div>
                        <div class="col">5.5 Days/week</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Publish Date:</b></div>
                        <div class="col">{{$item->career_date}}</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <br><br>
                <h5>Duties & Responsibilities</h5>
                <br><br>
                <h6><b>Talent Development</b></h6>
                <ul>
                    <li class="text-16">Managing, training, and providing overall guidance to the sales team of an assigned territory.</li>
                    <li class="text-16">Setting reasonable sales targets to be achieved by the sales team.</li>
                    <li class="text-16">Monitoring the performance of the sales team and motivating members to meet or exceed sales targets.</li>
                    <li class="text-16">Collecting customer feedback and providing updates to senior management/country manager.</li>
                    <li class="text-16">Traveling to potential and existing customers within an assigned sales area to present company offerings and build brand awareness.</li>
                    <li class="text-16">Developing and sustaining long-term relationships with customers.</li>
                    <li class="text-16">Implementing a sales management process to assist the sales team in identifying and prioritizing key customers and prospects.</li>
                </ul>
                <br><br>
                <h5>Qualification / Requirements</h5>
                <br><br>
                <ul>
                    <li class="text-16">Bachelor's degree in Sales & marketing, communications, business management, Business Administration or any related field.</li>
                    <li class="text-16">Proven sales experience; paint, building material or construction sector-specific sales experience is preferred.</li>
                    <li class="text-16">Proficient in all Microsoft Office applications.</li>
                    <li class="text-16">Excellent management, leadership, and organizational skills.</li>
                    <li class="text-16">Strong analytical and problem-solving skills.</li>
                    <li class="text-16">Outstanding negotiation and consultative sales skills.</li>
                    <li class="text-16">Effective communication skills.</li>
                    <li class="text-16">Exceptional customer service skills.</li>
                </ul>


                <br><br>
                <h5>Benefit</h5>
                <br><br>
                <ul>
                    <li class="text-16">Competitive Salary + Allowance and Incentive.</li>
                    <li class="text-16">Public Holiday, Special Leave & Sick Leave.</li>
                    <li class="text-16">Annual Leave 18 Days.</li>
                    <li class="text-16">Yearly Salary Incremental.</li>
                    <li class="text-16">Insurance.</li>
                </ul>
            <?php } ?>

            <?php if ($item->career_title == "Accountant") { ?>
                <h6><b>Description</b></h6>
                <div class="container text-16 mobile-lineheight">
                    <div class="row">
                        <div class="col col-2"><b>Position:</b></div>
                        <div class="col">{{$item->career_position}}</div>
                        <div class="col col-2"><b>Report To:</b></div>
                        <div class="col">{{$item->career_report_to}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Gender:</b></div>
                        <div class="col">{{$item->career_gender}}</div>
                        <div class="col col-2"><b>Salary:</b></div>
                        <div class="col">Negotiable</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Job Type:</b></div>
                        <div class="col">Full Time</div>
                        <div class="col col-2"><b>Work Place:</b></div>
                        <div class="col">{{$item->career_location}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Hiring:</b></div>
                        <div class="col">{{$item->career_hiring}}</div>
                        <div class="col col-2"><b>Working Day:</b></div>
                        <div class="col">5.5 Days/week</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Publish Date:</b></div>
                        <div class="col">{{$item->career_date}}</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <br><br>
                <h5>Duties & Responsibilities</h5>
                <br><br>
                <h6><b>Talent Development</b></h6>
                <ul>
                    <li class="text-16">Processing, verifying, and posting receipts.</li>
                    <li class="text-16">Researching and resolving account discrepancies.</li>
                    <li class="text-16">Processing and recording transactions.</li>
                    <li class="text-16">Maintaining records regarding payments and account statuses.</li>
                    <li class="text-16">Obtaining information from other departments to ensure records are accurate and complete and that accounts receivable ledgers and journals are up-to-date.</li>
                    <li class="text-16">Working with the collections department to review accounts, client payments, credit history, and develop new or better repayment terms.</li>
                    <li class="text-16">Performing administrative and clerical tasks, such as data entry, preparing invoices, sending bill reminders, filing paperwork, and contacting clients to discuss their accounts.</li>
                    <li class="text-16">Generating reports and statements for internal use.</li>
                    <li class="text-16">Other tasks as assigned by management.</li>
                </ul>
                <br><br>
                <h5>Qualification / Requirements</h5>
                <br><br>
                <ul>
                    <li class="text-16">Bachelor degree in accounting/Finance/ Banking or related field.</li>
                    <li class="text-16">Fair in spoken & written in English.</li>
                    <li class="text-16">At least 1-2 years’ experience of general accounting or related work.</li>
                    <li class="text-16">Honesty, commitment integrity a must.</li>
                    <li class="text-16">Ability be creative, hard-working, responsible, and flexible to work.</li>
                    <li class="text-16">Good communication and interpersonal skills: Be able to work well with outside people, make good negotiation and build the relationship with customer, vender and colleagues.</li>
                    <li class="text-16">Can used Quick Books Accounting/Data base or other software and Ms. office, Internet & Email.</li>
                </ul>

                <br><br>
                <h5>Benefit</h5>
                <br><br>
                <ul>
                    <li class="text-16">Competitive Salary + Allowance and Incentive.</li>
                    <li class="text-16">13th salary (Bonus Angpao before Chinese).</li>
                    <li class="text-16">Public Holiday, Special Leave & Sick Leave.</li>
                    <li class="text-16">Annual Leave 18 Days.</li>
                    <li class="text-16">Maternity Leave.</li>
                    <li class="text-16">Yearly Salary Incremental.</li>
                    <li class="text-16">Insurance.</li>
                </ul>
            <?php } ?>

            <?php if ($item->career_title == "Sales Specification Specialist") { ?>
                <h6><b>Description</b></h6>
                <div class="container text-16 mobile-lineheight">
                    <div class="row">
                        <div class="col col-2"><b>Position:</b></div>
                        <div class="col">{{$item->career_position}}</div>
                        <div class="col col-2"><b>Report To:</b></div>
                        <div class="col">{{$item->career_report_to}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Gender:</b></div>
                        <div class="col">{{$item->career_gender}}</div>
                        <div class="col col-2"><b>Salary:</b></div>
                        <div class="col">Negotiable</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Job Type:</b></div>
                        <div class="col">Full Time</div>
                        <div class="col col-2"><b>Work Place:</b></div>
                        <div class="col">{{$item->career_location}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Hiring:</b></div>
                        <div class="col">{{$item->career_hiring}}</div>
                        <div class="col col-2"><b>Working Day:</b></div>
                        <div class="col">5.5 Days/week</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Publish Date:</b></div>
                        <div class="col">{{$item->career_date}}</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <br><br>
                <h5>Duties & Responsibilities</h5>
                <br><br>
                <h6><b>Talent Development</b></h6>
                <ul>
                    <li class="text-16">To manage key accounts and meet or exceed targets relating to revenue growth, activities, profit margin, mix of products and services sales, customer retention and customer acquisition.</li>
                    <li class="text-16">To promote and recommended Nippon brand to specifiers private sector owner, Architects and IDs and specified into Tender Document.</li>
                    <li class="text-16">To service, assist, follow up with client for all project under private sector owner throughout Kingdom of Cambodia to ensure that secured all those projects.</li>
                    <li class="text-16">To identify and to secure business potential from capable private sector owner by promote and specified Nippon Brand into Tender Document.</li>
                    <li class="text-16">To service, assist, secure business from assigns key account customers from GLC and private sector owner.</li>
                    <li class="text-16">To assist colour studio to do colour scheme presentation and also to do technical presentation to key account customers.</li>
                    <li class="text-16">To assist technical team to provide technical service etc moisture test .product complaint.at site and also attending site meeting.</li>
                    <li class="text-16">To assist Head of Specification and project team regarding project supply and apply business tender.</li>
                    <li class="text-16">To prepare product specification proposal and tender document and to do presentation for tender clarification.</li>
                    <li class="text-16">To organise product presentation. Technical presentation. Colour concept, Costing and specification presentation to selected target customers and also to assist Head of Specification to participate in co-sponsor in any event, seminar, conference.</li>
                    <li class="text-16">Liaisons with professional architectural associates across the various provinces to organise technical seminars and exhibitions.</li>
                    <li class="text-16">Providing technical support to system partners and distributors in terms of design colour concept advise.</li>
                    <li class="text-16">To assist Head of Specification to develop project pipeline for all customers in charge and also for area in charge in order to have better business focus and view and also to build business strategy.</li>
                    <li class="text-16">Other tasks & duties as assigned by management.</li>
                </ul>

                <br><br>
                <h5>Qualification / Requirements</h5>
                <br><br>
                <ul>
                    <li class="text-16">Bachelor’s degree or diploma in Business, Marketing, Engineering Science or Related Building Industry Qualification.</li>
                    <li class="text-16">At least 3 years working experience in specification role in Building Material Industry with a proven track record.</li>
                    <li class="text-16">Good command of spoken and written English & Khmer.</li>
                    <li class="text-16">Ability to speak other languages will be added advantage.</li>
                    <li class="text-16">Possess good interpersonal skills.</li>
                    <li class="text-16">Good relationship & networking.</li>
                    <li class="text-16">Ability to work cross functional teams.</li>
                    <li class="text-16">Strong conceptualization analytical skills.</li>
                    <li class="text-16">Must be comfortable working as both a team player and a coach.</li>
                    <li class="text-16">Honesty excellent interpersonal skills.</li>
                </ul>


                <br><br>
                <h5>Benefit</h5>
                <br><br>
                <ul>
                    <li class="text-16">Competitive Salary + Allowance and Incentive.</li>
                    <li class="text-16">Public Holiday, Special Leave & Sick Leave.</li>
                    <li class="text-16">Annual Leave 18 Days.</li>
                    <li class="text-16">Yearly Salary Incremental.</li>
                    <li class="text-16">Insurance.</li>
                </ul>
            <?php } ?>

            <?php if ($item->career_title == "Call Center") { ?>
                <h6><b>Description</b></h6>
                <div class="container text-16 mobile-lineheight">
                    <div class="row">
                        <div class="col col-2"><b>Position:</b></div>
                        <div class="col">{{$item->career_position}}</div>
                        <div class="col col-2"><b>Report To:</b></div>
                        <div class="col">{{$item->career_report_to}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Gender:</b></div>
                        <div class="col">{{$item->career_gender}}</div>
                        <div class="col col-2"><b>Salary:</b></div>
                        <div class="col">Negotiable</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Job Type:</b></div>
                        <div class="col">Full Time</div>
                        <div class="col col-2"><b>Work Place:</b></div>
                        <div class="col">{{$item->career_location}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Hiring:</b></div>
                        <div class="col">{{$item->career_hiring}}</div>
                        <div class="col col-2"><b>Working Day:</b></div>
                        <div class="col">5.5 Days/week</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Publish Date:</b></div>
                        <div class="col">{{$item->career_date}}</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <br><br>
                <h5>Duties & Responsibilities</h5>
                <br><br>
                <h6><b>Talent Development</b></h6>
                <ul>
                    <li class="text-16">Promote and achieve sales revenue and sales targets.</li>
                    <li class="text-16">Maintain and development relationship with existing customers.</li>
                    <li class="text-16">Penetrate and open new outlets.</li>
                    <li class="text-16">Make daily sales report.</li>
                    <li class="text-16">Monitor and report market activities.</li>
                    <li class="text-16">Other tasks assigned by line manager.</li>
                </ul>
                <br><br>
                <h5>Qualification / Requirements</h5>
                <br><br>
                <ul>
                    <li class="text-16">Bachelor degree with relevant field.</li>
                    <li class="text-16">High school’s degree as minimum requirement.</li>
                    <li class="text-16">Fresh people or 1year experience in sale and marketing.</li>
                    <li class="text-16">Customer services orientation Friendly people.</li>
                    <li class="text-16">Computer literacy Ms. office, Internet & Email.</li>
                    <li class="text-16">Willingness to travel and work in a team of professionals.</li>
                    <li class="text-16">Residential in each province candidates are strongly encouraged to apply for this position.</li>
                    <li class="text-16">Honesty excellent interpersonal skills.</li>
                </ul>

                <br><br>
                <h5>Benefit</h5>
                <br><br>
                <ul>
                    <li class="text-16">Competitive Salary + Allowance and Incentive.</li>
                    <li class="text-16">13th salary (Bonus Angpao before Chinese).</li>
                    <li class="text-16">Public Holiday, Special Leave & Sick Leave.</li>
                    <li class="text-16">Annual Leave 18 Days.</li>
                    <li class="text-16">Maternity Leave.</li>
                    <li class="text-16">Yearly Salary Incremental.</li>
                    <li class="text-16">Insurance.</li>
                </ul>
            <?php } ?>

            <?php if ($item->career_title == "Marketing Manager") { ?>
                <h6><b>Description</b></h6>
                <div class="container text-16 mobile-lineheight">
                    <div class="row">
                        <div class="col col-2"><b>Position:</b></div>
                        <div class="col">{{$item->career_position}}</div>
                        <div class="col col-2"><b>Report To:</b></div>
                        <div class="col">{{$item->career_report_to}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Gender:</b></div>
                        <div class="col">{{$item->career_gender}}</div>
                        <div class="col col-2"><b>Salary:</b></div>
                        <div class="col">Negotiable</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Job Type:</b></div>
                        <div class="col">Full Time</div>
                        <div class="col col-2"><b>Work Place:</b></div>
                        <div class="col">{{$item->career_location}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Hiring:</b></div>
                        <div class="col">{{$item->career_hiring}}</div>
                        <div class="col col-2"><b>Working Day:</b></div>
                        <div class="col">5.5 Days/week</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Publish Date:</b></div>
                        <div class="col">{{$item->career_date}}</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <br><br>
                <h5>Duties & Responsibilities</h5>
                <br><br>
                <h6><b>Talent Development</b></h6>
                <ul>
                    <li class="text-16">Developing the marketing strategy for the company in line with company objectives.</li>
                    <li class="text-16">Coordinating marketing campaigns with sales activities.</li>
                    <li class="text-16">Planning and overseeing the company’s marketing budget.</li>
                    <li class="text-16">Creation and publication of all marketing material in line with marketing plans.</li>
                    <li class="text-16">Planning and implementing promotional campaigns.</li>
                    <li class="text-16">Overall responsibility for brand management.</li>
                    <li class="text-16">Monitor and report on effectiveness of marketing communications.</li>
                    <li class="text-16">Creating a wide range of different marketing materials.</li>
                    <li class="text-16">Working closely with design agencies and assisting with new product launches.</li>
                    <li class="text-16">Maintain effective internal communications to ensure that all relevant company functions are kept informed of marketing objectives.</li>
                    <li class="text-16">Analyzing potential strategic partner relationships for company marketing.</li>
                    <li class="text-16">Other tasks assigned by top management.</li>
                </ul>
                <br><br>
                <h5>Qualification / Requirements</h5>
                <br><br>
                <ul>
                    <li class="text-16">Local candidate (Khmer) is required.</li>
                    <li class="text-16">Bachelor's degree in Sales & marketing, communications, business management, Business Administration or any related field.</li>
                    <li class="text-16">Proven marketing experience; paint, building material or construction sector-specific marketing experience is preferred.</li>
                    <li class="text-16">Proficient in all Microsoft Office applications.</li>
                    <li class="text-16">Excellent management, leadership, and organizational skills.</li>
                    <li class="text-16">Strong analytical and problem-solving skills.</li>
                    <li class="text-16">Visualize and Creative.</li>
                    <li class="text-16">Outstanding negotiation and consultative sales skills.</li>
                    <li class="text-16">Effective communication skills.</li>
                    <li class="text-16">Exceptional customer service skills.</li>
                </ul>

                <br><br>
                {{-- <h5>Benefit</h5>
                <br><br>
                <ul>
                    <li class="text-16">Competitive Salary + Allowance and Incentive.</li>
                    <li class="text-16">13th salary (Bonus Angpao before Chinese).</li>
                    <li class="text-16">Public Holiday, Special Leave & Sick Leave.</li>
                    <li class="text-16">Annual Leave 18 Days.</li>
                    <li class="text-16">Maternity Leave.</li>
                    <li class="text-16">Yearly Salary Incremental.</li>
                    <li class="text-16">Insurance.</li>
                </ul> --}}
            <?php } ?>

            <?php if ($item->career_title == "Sales Executive") { ?>
                <h6><b>Description</b></h6>
                <div class="container text-16 mobile-lineheight">
                    <div class="row">
                        <div class="col col-2"><b>Position:</b></div>
                        <div class="col">{{$item->career_position}}</div>
                        <div class="col col-2"><b>Report To:</b></div>
                        <div class="col">{{$item->career_report_to}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Gender:</b></div>
                        <div class="col">{{$item->career_gender}}</div>
                        <div class="col col-2"><b>Salary:</b></div>
                        <div class="col">Negotiable</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Job Type:</b></div>
                        <div class="col">Full Time</div>
                        <div class="col col-2"><b>Work Place:</b></div>
                        <div class="col">{{$item->career_location}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Hiring:</b></div>
                        <div class="col">{{$item->career_hiring}}</div>
                        <div class="col col-2"><b>Working Day:</b></div>
                        <div class="col">5.5 Days/week</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Publish Date:</b></div>
                        <div class="col">{{$item->career_date}}</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <br><br>
                <h5>Duties & Responsibilities</h5>
                <br><br>
                <h6><b>Talent Development</b></h6>
                <ul>
                    <li class="text-16">Promote and achieve sales revenue and sales targets.</li>
                    <li class="text-16">Maintain and development relationship with existing customers.</li>
                    <li class="text-16">Penetrate and open new outlets.</li>
                    <li class="text-16">Make daily sales report.</li>
                    <li class="text-16">Monitor and report market activities.</li>
                    <li class="text-16">Other tasks assigned by line manager.</li>
                </ul>
                <br><br>
                <h5>Qualification / Requirements</h5>
                <br><br>
                <ul>
                    <li class="text-16">Bachelor degree with relevant field. - High school’s degree as minimum requirement.</li>
                    <li class="text-16">Fresh people or 1year experience in sale and marketing.</li>
                    <li class="text-16">Customer-service orientation Friendly people.</li>
                    <li class="text-16">Computer literacy Ms. office, Internet & Email.</li>
                    <li class="text-16">Willingness to travel and work in a team of professionals.</li>
                    <li class="text-16">Residential in each province candidates are strongly encouraged to apply for this position.</li>
                    <li class="text-16">Honesty excellent interpersonal skills.</li>
                </ul>

                <br><br>
                <h5>Benefit</h5>
                <br><br>
                <ul>
                    <li class="text-16">Competitive Salary + Allowance and Incentive.</li>
                    <li class="text-16">Public Holiday, Special Leave & Sick Leave.</li>
                    <li class="text-16">Annual Leave 18 Days.</li>
                    <li class="text-16">Maternity Leave.</li>
                    <li class="text-16">Yearly Salary Incremental.</li>
                    <li class="text-16">Insurance.</li>
                </ul>
            <?php } ?>

            <?php if ($item->career_title == "Sales Admin") { ?>
                <div class="container text-16 mobile-lineheight">
                    <div class="row">
                        <div class="col col-2"><b>Position:</b></div>
                        <div class="col">{{$item->career_position}}</div>
                        <div class="col col-2"><b>Report To:</b></div>
                        <div class="col">{{$item->career_report_to}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Gender:</b></div>
                        <div class="col">{{$item->career_gender}}</div>
                        <div class="col col-2"><b>Salary:</b></div>
                        <div class="col">Negotiable</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Job Type:</b></div>
                        <div class="col">Full Time</div>
                        <div class="col col-2"><b>Work Place:</b></div>
                        <div class="col">{{$item->career_location}}</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Hiring:</b></div>
                        <div class="col">{{$item->career_hiring}}</div>
                        <div class="col col-2"><b>Working Day:</b></div>
                        <div class="col">5.5 Days/week</div>
                    </div>
                    <div class="row">
                        <div class="col col-2"><b>Publish Date:</b></div>
                        <div class="col">{{$item->career_date}}</div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <br><br>
                <h5>Duties & Responsibilities</h5>
                <br><br>
                <h6><b>Talent Development</b></h6>
                <ul>
                    <li class="text-16">Provide clerical and organization support to sales teams.</li>
                    <li class="text-16">Track orders, process paperwork, maintain the customer database.</li>
                    <li class="text-16">Maintaining and updating sales and customer records.</li>
                    <li class="text-16">Compiling daily, weekly, and monthly sales reports and monitor sales efforts.</li>
                    <li class="text-16">Verify and update and follow up Quotation, Samples, and Contract.</li>
                    <li class="text-16">Expediting orders/deliveries through internal liaison.</li>
                    <li class="text-16">Directing feedback from customers to relevant departments.</li>
                    <li class="text-16">Provide after sales support to customers.</li>
                    <li class="text-16">Verifying customers data and payment records.</li>
                    <li class="text-16">Handle customer questions, requests, and complaints.</li>
                    <li class="text-16">Identifying new products to add to those on offer.</li>
                    <li class="text-16">Others as assigned by management.</li>
                </ul>
                <br><br>
                <h5>Qualification / Requirements</h5>
                <br><br>
                <ul>
                    <li class="text-16">An associate’s or bachelor's degree in business administration, sales and marketing or similar preferred.</li>
                    <li class="text-16">Previous experience in sales administration, or a similar role.</li>
                    <li class="text-16">Exceptional interpersonal and customer service skills. - Advanced knowledge of administrative recordkeeping.</li>
                    <li class="text-16">Familiarity with sales reports and sales records.</li>
                    <li class="text-16">Good command of written and verbal communication skills both in Khmer and English.</li>
                </ul>

                <br><br>
                <h5>Benefit</h5>
                <br><br>
                <ul>
                    <li class="text-16">Competitive Salary + Allowance and Incentive.</li>
                    <li class="text-16">Public Holiday, Special Leave & Sick Leave.</li>
                    <li class="text-16">Annual Leave 18 Days.</li>
                    <li class="text-16">Maternity Leave.</li>
                    <li class="text-16">Yearly Salary Incremental.</li>
                    <li class="text-16">Insurance.</li>
                </ul>
            <?php } ?>
            @endforeach
        </div>
    </section>


<br><br>
</div>

@endsection
