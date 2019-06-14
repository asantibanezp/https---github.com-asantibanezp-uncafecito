<?php

class Job {
    public $title;
    public $description;
    public $visible = true;
    public $months;

}

$job1 = new Job();
$job1->months = 1;
$job1->title = 'Este es mi titulo Job 1';
$job1->description = 'Esta es mi descripcion Job 1';

$job2 = new Job();
$job2->months = 2;
$job2->title = 'Este es mi titulo Job 2';
$job2->description = 'Esta es mi descripcion Job 2';

$job3 = new Job();
$job3->months = 3;
$job3->title = 'Este es mi titulo Job 3';
$job3->description = 'Esta es mi descripcion Job 3';


$jobs = [
    $job1,
    $job2,
    $job3
    // [
    //   '' => ,
    //   'description' => ,
    //   'visible' => true,
    //   'months' => 16
    // ],
    // [
    //   'title' => 'Python Dev',
    //   'visible' => false,
    //   'months' => 14
    // ],
    // [
    //   'title' => 'Devops',
    //   'visible' => true,
    //   'months' => 5
    // ],
    // [
    //   'title' => 'Node Dev',
    //   'visible' => true,
    //   'months' => 24
    // ],
    // [
    //   'title' => 'Frontend Dev',
    //   'visible' => true,
    //   'months' => 3
    // ]
  ];
  
  function printJob($job) {
    if($job->visible == false) {
      return;
    }
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->title . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->months . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>jiiii ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>jiiii ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>jiiii ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }