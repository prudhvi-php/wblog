@extends('layouts.app')

@section('content')
<?php
    $content = '<div class="snippet-container"><div class="sh_default snippet-wrap"><div class="snippet-menu sh_sourceCode"><a class="snippet-window sh_url" href="#">pop-up</a><a class="snippet-text sh_url" href="#">text</a></div><pre class="shi_pre sh_php snippet-formatted sh_sourceCode"><ol class="snippet-num"><li><span class="sh_symbol">&lt;?php</span></li><li> <span class="sh_keyword">echo</span> <span class="sh_string">"Hi, Welcome"</span><span class="sh_symbol">;</span></li><li><span class="sh_symbol">?&gt;</span></li></ol></pre><pre class="snippet-textonly sh_sourceCode" style="display:none;" tabindex="0" contenteditable="">&lt;?php
 echo "Hi, Welcome";
?&gt;</pre></div></div>';

$cc = '<div class="snippet-container"><div class="sh_default snippet-wrap"><div class="snippet-menu sh_sourceCode"><a class="snippet-window sh_url" href="#">pop-up</a><a class="snippet-text sh_url" href="#">text</a></div><pre class="shi_pre sh_php snippet-formatted sh_sourceCode"><ol class="snippet-num"><li><span class="sh_symbol">&lt;?php</span></li><li> <span class="sh_keyword">echo</span> <span class="sh_string">"Herooooooo"</span><span class="sh_symbol">;</span></li><li><span class="sh_symbol">?&gt;</span></li></ol></pre><pre class="snippet-textonly sh_sourceCode" style="display:none;" tabindex="0" contenteditable="">&lt;?php
 echo "Herooooooo";
?&gt;</pre></div></div>';
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!


                    <div>
                        

                        {!! $cc !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
