<html>
<head>
	<title>ADMIN PANEL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <link rel="icon" type="image/x-icon" href="{{url('imgs/pngs/fav1.png')}}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('/css/admin.css')}}?{{uniqid()}}">
</head>
<body>
    <div class="container-fluid main-container">
        <div class="row" style="min-height: 100vh">
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12 side-bar pr-0">
                <div class="main-sidebar">
                    <div class="p-2 sidebar-header"><h2 class="text-white mb-0">Admin Panel</h2></div>
                    <div class="xl-list pt-3">
                        <ul class="list-group">
                            <li class="sidebar-item list-group-item text-center">Home</li>
                        </ul>
                    </div>
                    <div class="sm-list">
                        <button class="drop-btn-sidebar" data-toggle="collapse" data-target="#demo"><i class="fa-solid fa-caret-down"></i></button>                     
                    </div>
                </div>
                <div id="demo" class="collapse">
                    <ul class="list-group">
                        <li class="sidebar-item list-group-item text-center">Home</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-9 col-sm-12 col-12 col-">
                <div class="row">
                    <div class="col-12">
                        <div class="widget p-3 shadow mt-3 rounded-corners">
                            <form action="add_subject" method="POST" class="p-3">
                                <h4>Add subject</h4>
                                @csrf
                                <div class="form-group"><input type="text" name="name" placeholder="name" class="form-control"></div>
                                <div class="form-group">
                                    <select class="form-control" name="language" id="languageOpts"></select>
                                </div>
                                <div class="form-group"><input type="submit" value="Add" class="btn shadow-sm border"></div>
                            </form>
                            <script>
                                var languages = `["A# (Axiom)","A-0 System","A+","A++","ABAP","ABC","ABC ALGOL","ABLE","ABSET","ABSYS","ACC","Accent","Ace DASL","ACL2","ACT-III","Action!","ActionScript","Ada","Adenine","Agda","Agilent VEE","Agora","AIMMS","Alef","ALF","ALGOL 58","ALGOL 60","ALGOL 68","ALGOL W","Alice","Alma-0","AmbientTalk","Amiga E","AMOS","AMPL","APL","App Inventor for Android's visual block language","AppleScript","Arc","ARexx","Argus","AspectJ","Assembly language","ATS","Ateji PX","AutoHotkey","Autocoder","AutoIt","AutoLISP / Visual LISP","Averest","AWK","Axum","B","Babbage","Bash","BASIC","bc","BCPL","BeanShell","Batch (Windows/Dos)","Bertrand","BETA","Bigwig","Bistro","BitC","BLISS","Blue","Bon","Boo","Boomerang","Bourne shell","bash","ksh","BREW","BPEL","C","C--","C++","C#","C/AL","Caché ObjectScript","C Shell","Caml","Candle","Cayenne","CDuce","Cecil","Cel","Cesil","Ceylon","CFEngine","CFML","Cg","Ch","Chapel","CHAIN","Charity","Charm","Chef","CHILL","CHIP-8","chomski","ChucK","CICS","Cilk","CL","Claire","Clarion","Clean","Clipper","CLIST","Clojure","CLU","CMS-2","COBOL","Cobra","CODE","CoffeeScript","Cola","ColdC","ColdFusion","COMAL","Combined Programming Language","COMIT","Common Intermediate Language","Common Lisp","COMPASS","Component Pascal","Constraint Handling Rules","Converge","Cool","Coq","Coral 66","Corn","CorVision","COWSEL","CPL","csh","CSP","Csound","CUDA","Curl","Curry","Cyclone","Cython","D","DASL","DASL","Dart","DataFlex","Datalog","DATATRIEVE","dBase","dc","DCL","Deesel","Delphi","DinkC","DIBOL","Dog","Draco","DRAKON","Dylan","DYNAMO","E","E#","Ease","Easy PL/I","Easy Programming Language","EASYTRIEVE PLUS","ECMAScript","Edinburgh IMP","EGL","Eiffel","ELAN","Elixir","Elm","Emacs Lisp","Emerald","Epigram","EPL","Erlang","es","Escapade","Escher","ESPOL","Esterel","Etoys","Euclid","Euler","Euphoria","EusLisp Robot Programming Language","CMS EXEC","EXEC 2","Executable UML","F","F#","Factor","Falcon","Fancy","Fantom","FAUST","Felix","Ferite","FFP","Fjölnir","FL","Flavors","Flex","FLOW-MATIC","FOCAL","FOCUS","FOIL","FORMAC","@Formula","Forth","Fortran","Fortress","FoxBase","FoxPro","FP","FPr","Franz Lisp","Frege","F-Script","FSProg","G","Google Apps Script","Game Maker Language","GameMonkey Script","GAMS","GAP","G-code","Genie","GDL","Gibiane","GJ","GEORGE","GLSL","GNU E","GM","Go","Go!","GOAL","Gödel","Godiva","GOM (Good Old Mad)","Goo","Gosu","GOTRAN","GPSS","GraphTalk","GRASS","Groovy","Hack (programming language)","HAL/S","Hamilton C shell","Harbour","Hartmann pipelines","Haskell","Haxe","High Level Assembly","HLSL","Hop","Hope","Hugo","Hume","HyperTalk","IBM Basic assembly language","IBM HAScript","IBM Informix-4GL","IBM RPG","ICI","Icon","Id","IDL","Idris","IMP","Inform","Io","Ioke","IPL","IPTSCRAE","ISLISP","ISPF","ISWIM","J","J#","J++","JADE","Jako","JAL","Janus","JASS","Java","JavaScript","JCL","JEAN","Join Java","JOSS","Joule","JOVIAL","Joy","JScript","JScript .NET","JavaFX Script","Julia","Jython","K","Kaleidoscope","Karel","Karel++","KEE","Kixtart","KIF","Kojo","Kotlin","KRC","KRL","KUKA","KRYPTON","ksh","L","L# .NET","LabVIEW","Ladder","Lagoona","LANSA","Lasso","LaTeX","Lava","LC-3","Leda","Legoscript","LIL","LilyPond","Limbo","Limnor","LINC","Lingo","Linoleum","LIS","LISA","Lisaac","Lisp","Lite-C","Lithe","Little b","Logo","Logtalk","LPC","LSE","LSL","LiveCode","LiveScript","Lua","Lucid","Lustre","LYaPAS","Lynx","M2001","M4","Machine code","MAD","MAD/I","Magik","Magma","make","Maple","MAPPER","MARK-IV","Mary","MASM Microsoft Assembly x86","Mathematica","MATLAB","Maxima","Macsyma","Max","MaxScript","Maya (MEL)","MDL","Mercury","Mesa","Metacard","Metafont","MetaL","Microcode","MicroScript","MIIS","MillScript","MIMIC","Mirah","Miranda","MIVA Script","ML","Moby","Model 204","Modelica","Modula","Modula-2","Modula-3","Mohol","MOO","Mortran","Mouse","MPD","CIL","MSL","MUMPS","NASM","NATURAL","Napier88","Neko","Nemerle","nesC","NESL","Net.Data","NetLogo","NetRexx","NewLISP","NEWP","Newspeak","NewtonScript","NGL","Nial","Nice","Nickle","Nim","NPL","Not eXactly C","Not Quite C","NSIS","Nu","NWScript","NXT-G","o:XML","Oak","Oberon","Obix","OBJ2","Object Lisp","ObjectLOGO","Object REXX","Object Pascal","Objective-C","Objective-J","Obliq","Obol","OCaml","occam","occam-π","Octave","OmniMark","Onyx","Opa","Opal","OpenCL","OpenEdge ABL","OPL","OPS5","OptimJ","Orc","ORCA/Modula-2","Oriel","Orwell","Oxygene","Oz","P#","ParaSail (programming language)","PARI/GP","Pascal","Pawn","PCASTL","PCF","PEARL","PeopleCode","Perl","PDL","PHP","Phrogram","Pico","Picolisp","Pict","Pike","PIKT","PILOT","Pipelines","Pizza","PL-11","PL/0","PL/B","PL/C","PL/I","PL/M","PL/P","PL/SQL","PL360","PLANC","Plankalkül","Planner","PLEX","PLEXIL","Plus","POP-11","PostScript","PortablE","Powerhouse","PowerBuilder","PowerShell","PPL","Processing","Processing.js","Prograph","PROIV","Prolog","PROMAL","Promela","PROSE modeling language","PROTEL","ProvideX","Pro*C","Pure","Python","Q (equational programming language)","Q (programming language from Kx Systems)","Qalb","QtScript","QuakeC","QPL","R","R++","Racket","RAPID","Rapira","Ratfiv","Ratfor","rc","REBOL","Red","Redcode","REFAL","Reia","Revolution","rex","REXX","Rlab","RobotC","ROOP","RPG","RPL","RSL","RTL/2","Ruby","RuneScript","Rust","S","S2","S3","S-Lang","S-PLUS","SA-C","SabreTalk","SAIL","SALSA","SAM76","SAS","SASL","Sather","Sawzall","SBL","Scala","Scheme","Scilab","Scratch","Script.NET","Sed","Seed7","Self","SenseTalk","SequenceL","SETL","Shift Script","SIMPOL","SIGNAL","SiMPLE","SIMSCRIPT","Simula","Simulink","SISAL","SLIP","SMALL","Smalltalk","Small Basic","SML","Snap!","SNOBOL","SPITBOL","Snowball","SOL","Span","SPARK","Speedcode","SPIN","SP/k","SPS","Squeak","Squirrel","SR","S/SL","Stackless Python","Starlogo","Strand","Stata","Stateflow","Subtext","SuperCollider","SuperTalk","Swift (Apple programming language)","Swift (parallel scripting language)","SYMPL","SyncCharts","SystemVerilog","T","TACL","TACPOL","TADS","TAL","Tcl","Tea","TECO","TELCOMP","TeX","TEX","TIE","Timber","TMG","Tom","TOM","Topspeed","TPU","Trac","TTM","T-SQL","TTCN","Turing","TUTOR","TXL","TypeScript","Turbo C++","Ubercode","UCSD Pascal","Umple","Unicon","Uniface","UNITY","Unix shell","UnrealScript","Vala","VBA","VBScript","Verilog","VHDL","Visual Basic","Visual Basic .NET","Visual DataFlex","Visual DialogScript","Visual Fortran","Visual FoxPro","Visual J++","Visual J#","Visual Objects","Visual Prolog","VSXu","Vvvv","WATFIV, WATFOR","WebDNA","WebQL","Windows PowerShell","Winbatch","Wolfram","Wyvern","X++","X#","X10","XBL","XC","XMOS architecture","xHarbour","XL","Xojo","XOTcl","XPL","XPL0","XQuery","XSB","XSLT","XPath","Xtend","Yorick","YQL","Z notation","Zeno","ZOPL","ZPL"]`;
                                var langObj = JSON.parse(languages);
                                $(langObj).each(function(){
                                    var option = `<option value="${this}">${this}</option>`;
                                    $(option).appendTo("#languageOpts");
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="pb-3">
                            <h4>Subjects</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                    @foreach($subjects as $subject)
                        <div class="col-12 mb-3">
                            <div>
                            <input type="hidden" id="{{$subject->uniq_id}}" value="{{$subject->roadmap}}">
                            <div class="p-3 shadow-sm border">
                                <div class="mb-3"><h5><a href="#" data-toggle="collapse" data-target="#{{$subject->name}}">{{$subject->name}}</a></h5></div>
                                <div class="roadmap collapse" id="{{$subject->name}}">
                                    <div class="{{$subject->uniq_id}} w-50"></div>
                                    <div class="w-50 pl-3 pr-3">
                                        <div class="mb-2">
                                            <h5><strong>Add step</strong></h5>
                                            <div class="form-group d-flex mb-1">
                                                <input id="my-input" class="form-control" type="text">
                                                <input type="number" class="form-control ml-2" style="width:75px;" value="1">
                                            </div>
                                            <a class="btn btn-sm btn-info mt-1">Add</a>
                                        </div>
                                        <form class="mt-3" method="POST" action="update_roadmap">
                                            @csrf
                                            <textarea class="form-control {{$subject->uniq_id}}_textarea"></textarea>
                                            <input type="hidden" value="{{$subject->uniq_id}}" name="id">
                                            <input type="text" name="roadmap" id="roadmapinp_{{$subject->uniq_id}}">
                                            <a onclick="process(`roadmapinp_{{$subject->uniq_id}}`,`{{$subject->uniq_id}}_textarea`)" class="btn btn-sm btn-warning text-white process">Process</a>
                                            <input type="submit" value="Save" class="btn btn-sm btn-success mt-2">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <script>
                            var id = `{{$subject->uniq_id}}`;
                            var roadmap = $(`#${id}`).val();
                            var object = JSON.parse(roadmap);
                            var obj_string = "";
                            for(var i=0;i<object.length;i++){
                                var order = i+1;
                                var node = `<div class='p-2 border mb-2 d-flex align-items-center' style='order:${order}'><h6 class='mb-0'>${object[i]} - ${i+1}</h6> <div class='d-flex flex-grow-1 justify-content-end'><a href="#" class='down text-warning'><i class="fa-solid fa-circle-down"></i></a> <a href="#" class='up ml-2 text-success'><i class="fa-solid fa-circle-up"></i></a> <a class='del text-danger ml-2' roadmapId='${id}' index=${i}><i class="fa-solid fa-trash"></i></a></div></div>`;
                                $(node).appendTo(`.${id}`);
                                if(i == object.length-1){
                                    obj_string = obj_string + `${object[i]}`;
                                }else{
                                    obj_string = obj_string + `${object[i]},`;
                                }
                                obj_string = obj_string + "\n";
                            }
                            $(`.${id}_textarea`).val(obj_string);
                            //console.log(object);
                        </script>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{url('/js/admin.js')}}"></script>
</html>