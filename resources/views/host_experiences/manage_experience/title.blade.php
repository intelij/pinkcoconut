<div class="main_bar pull-left padd5 text-black bg-white pos_rel">
  <div class="pos_fix2 bg-white">
    @include('host_experiences.manage_experience.header', ['header_inverse' => true])
  </div>
  <div class="clearfix ">
    <div class="col-lg-7">
      <p class="h2 bold space-top-8">{{trans('experiences.manage.title_your_experience')}}
      </p>
      <p class="h4 line1 space-2">{{trans('experiences.manage.title_page_desc')}}
      </p>
      <a href="#" class="rm_link text-rausch h4 pop_link hide" data-id="popup2"> 
        <span class="icon icon2-light-bulb h3">
        </span> {{trans('experiences.manage.tips_and_examples')}}
      </a>
      <br>
      <input type="text" name="title" class="input_new1 space-top-6" id="host_experience_title" placeholder="{{trans('experiences.manage.enter_experience_name')}}" ng-model="host_experience.title" />
      <p class="focus_show space-top-2" ng-class="steps_status[step] ? '' : 'text-warning'">@{{character_length_validation(10, 38, host_experience.title.length)}}
      </p>
      <p class="text-danger" ng-show="form_errors.title.length">@{{form_errors.title[0]}}</p>
      <!-- check_detail end -->
      @include('host_experiences.manage_experience.control_buttons')
    </div>
    <div class="pos_fix1">
      @include('host_experiences/manage_experience/mobile_preview')
    </div>
  </div>
</div>
<!--  main_bar end -->