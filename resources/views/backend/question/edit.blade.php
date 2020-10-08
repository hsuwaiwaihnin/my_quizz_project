@extends('backendtemplate')

@section('content')
<h1>Edit Question</h1>

<form action="{{route('question.update',$question->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">

    <div class="col-md-12 my-3">
        <select name="subject">
            <option>--Select Subject--</option>
            @foreach($subjects as $subject)
                <option value="{{$subject->id}}"
                    @if($subject->id==$question->subject_id)
                    {{'selected'}}
                    @endif

                >{{$subject->name}}</option>
            @endforeach
        </select>

    </div>

    <div class="col-md-12 my-3"> 
        <textarea>{{$question->name}}</textarea>
    </div>

    <div class="col-md-12 my-3">
        <input type="radio" name="status" checked id="mutilbtn" value="1" 
        {{($question->status == 1) ? 'checked' : ''}} ><label for="mutilbtn" class="mutilbtn1 ml-2">MultiChoice</label>
        <input type="radio" id="tfbtn" name="status" value="0" {{($question->status == 0) ? 'checked' : ''}}
        ><label for="tfbtn" class="tfbtn1 ml-2">True False</label>
    </div>

    {{-- <div class="col-md-12 my-3" id="formultiplechoice">
        <div class="my-2">
            <label for="answerone">Answer One:</label>
            <input type="text" name="answerone" class="ans1" value="{{$answerone}}">
        </div>
        <div class="my-2">
            <label for="answertwo">Answer Two:</label>
            <input type="text" name="answertwo" class="ans2" value="{{$answertwo}}">
        </div>
        <div class="my-2">
            <label for="answerthree">Answer Three</label>
            <input type="text" name="answerthree" class="ans3" value="{{$answerthree}}">
        </div>
        <div class="my-2">
            <label for="question">Answer Four</label>
            <input type="text" name="answerfour" class="ans4" value="{{$answerfour}}">
        </div> --}}

        <?php $i=0?>
        @foreach($answers as $answer)
        <input type="hidden" name="" value="{{$question->status}}" id="status">
        <?php $i++ ?>
            <div class="my-2">
            <label for="question">Answer {{$i}}</label>
            <input type="text" name="name{{$i}}" class="ans{{$i}}" value="{{$answer->answer}}">
        </div>
        @endforeach
        <div>
            <label for="question">Right Answer</label>
            <select name="rightanswer">
                <option>This is answer</option>
                <?php $j=1?>
                @foreach ($answers as $answer)
                    <option id="val{{$j++}}">{{$answer->answer}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-12" id="fortruefalse">
        <div>
            <label for="question">Right Answer</label>
            <select name="rightanswer1">
                <option value="true">True</option>
                <option value="false">False</option>
            </select>
        </div>
    </div>

    <button type="reset" class="btn btn-secondary text-uppercase mr-2"> 
        <i class="fas fa-times mr-2"></i> Cancel 
    </button>
    <button type="submit" class="btn btn-primary text-uppercase"> 
        <i class="fas fa-save mr-2"></i> Update
    </button>
</div>
</form>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            status = $('#status').val();
             //alert(status);
            if(status==1){
                // alert('ths is 1');
                //$('#mutilbtn').hide();
                //$('#tfbtn').show();
                $('.mutilbtn1').show();
                $('.tfbtn1').hide();
            }else {
                // alert('this is 0');
                //$('#tfbtn').hide();
                //$('#mutilbtn').show();
                $('.tfbtn1').show();
                $('.mutilbtn1').hide();
            }
            // $('#ans1').html(ans1);
            $('#fortruefalse').hide();
            $('#mutilbtn').click(function () {
                // alert('multi');
                $('#formultiplechoice').show();
                $('#fortruefalse').hide();

            });
             $('#tfbtn').click(function () {
                // alert('tf');
                $('#formultiplechoice').hide();
                $('#fortruefalse').show();
            });
             $('.ans1').keyup(function () {
                // alert($(this).val());
                 $('#val1').html($(this).val());
                 $('#val1').val($(this).val());
             });
             $('.ans2').keyup(function () {
                // alert($(this).val());
                 $('#val2').html($(this).val());
                 $('#val2').val($(this).val());
             });
             $('.ans3').keyup(function () {
                // alert($(this).val());
                 $('#val3').html($(this).val());
                 $('#val3').val($(this).val());
             });
             $('.ans4').keyup(function () {
                // alert($(this).val());
                 $('#val4').html($(this).val());
                 $('#val4').val($(this).val());
             });
        })
    </script>
@endsection