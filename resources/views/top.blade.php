@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
  <div class="text-center mt-3">
    <p>採用ご担当者様はこちらの簡易新規ログインページをご利用下さい。</p>
    <a class="btn btn-primary" href="">簡易新規登録＆ログイン</a>
    <a class="btn btn-primary" href="/todo">Todo一覧</a>
  </div>
  <h1 class="topTitle mt-5 text-center text-info">おかえりTodo</h1>
  <!-- <h3 class="topTitle text-center">- 帰国Todo -</h3> -->
  <div class="text-center" style="margin : 0 auto">
    <img src="{{ asset('image/topWelcome.jpg') }}" style="width: 75%;" alt="top image">
  </div>
  <div style="margin: 0 300px;">
    <h3 class="text-center" style="margin-bottom: 80px;">帰国時の予定を建てましょう</h3>
    <div class="text-center">
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;" onclick="clickTotal1()" type="button">#家族と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px" onclick="clickTotal2()" type="button">#買い物に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px" onclick="clickTotal3()">#お土産を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;"  onclick="clickTotal4()">#日本食を食べる</button>
    </div>
    <div class="flex-box my-3">
      <div class="cp_iptxt mr-1">
        <input type="text" id="inputTodoText" placeholder="Todoを入力しましょう">
        <i class="fas fa-list-ul" aria-hidden="true"></i>
      </div>
      <button class="btn btn-outline-primary mr-5" onclick="clickTextTotal()">Todo追加</button>
    </div>
    <form action="{{ action('TopController@create') }}" method="post" name="form1">
      <div class="text-center mt-4">
        <div id="testarea" class="w-100" name="text2" style="border: 1px solid #dbdbdb; height: 150px;"></div>
      </div>
      @csrf
      @if (count($errors) > 0)
          <p class="top-form-alert">Todoタグを選択するか入力フォームでTodo追加をしてください</p>
        @endif
      <div class="flex-box">
        <div class="text-center" style="margin-left: 610px;">
          <div class="btn btn-secondary" onclick="clickClear()" >クリア</div>
          <button id="output-for-listtodo" type="submit" class="btn btn-success" >リストを出力する</button>
        </div>
      </div>  
      <p style="margin-left: 580px;">リストを出力するには登録が必要です。</p>
    </form>  
  </div>
  <div class="tagContainer" style="margin: 80px 270px;">
    <div class="meetContainer">
      <h4 style="margin-bottom: 20px;">人と会う</h4>
      <button class="btn btn_tag btn-primary btn-lg testbutton" style="border-radius: 20px; margin-right: 30px;">#家族と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#友達と会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#恋人に会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#親戚に会う</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#兄弟に会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#同僚に会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#本社へあいさつ</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#交流会に参加</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#恩人に会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#に会う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#</button>
    </div>
    
    <div class="shoppingContainer">
      <h4 style="margin: 20px 0;">買い物</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#ショッピングに行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#服を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#化粧を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#メガネを買う</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#スーツを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#お土産を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#お菓子を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#仕事着を買う</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#本を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#薬を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#文房具を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#家電を買う</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#ゲームを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#お酒を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#調味料を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#PCを買う</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#スマホを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#冠婚葬祭用品を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#スーツケースを買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#100円SHOPに行く</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#子供の服を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#</button>

    <div class="entertainContainer">
      <h4 style="margin: 20px 0;">娯楽</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#映画を観に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#温泉に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#国内旅行</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#野球観戦</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#ドライブに行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#カラオケに行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#遊園地に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#水族館に行く</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#キャンプをする</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#カフェに行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#サッカー観戦</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#公園に行く</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#家電量販店に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#海に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#スキー場に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#美容室に行く</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#マッサージに行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#スーパー銭湯に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#飲みに行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#エステに行く</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#ネイルサロンに行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">寺社仏閣の見学</button>
      <button class="btn btn_tag  btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#お祭り行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#子供と遊ぶ</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#ディズニーに行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">猫カフェに行く</button>
      <button class="btn btn_tag  btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#ネットカフェに行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#レッスンに行く</button>
    </div>

    </div>
    <div class="mealContainer">
      <h4 style="margin: 20px 0;">食事</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#日本食を食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#寿司を食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#ラーメンを食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; ">#カレーを食べる</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#とんかつを食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#うどんを食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#そばを食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#焼肉を食べる</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#天ぷらを食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#を食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#食べる</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#食べる</button>
    </div>
    <div class="procedureContainer">
      <h4 style="margin: 20px 0;">手続き関連</h4>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#役所へ行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#運転免許の更新</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#住民票手続き</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;">#大使館へ行く</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#両替</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#病院に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#歯医者に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;">#予防接種を受ける</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#銀行に行く</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#荷物の発送</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#Wifi手続き</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;">#カード類手続き</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#人間ドッグ</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#現金引き出し</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#レンタル品の返却</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;">#</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#航空チケットの購入</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#バスの予約</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#新幹線の予約</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;">#保険の加入</button>
      <div class="forTagSpace" style="margin: 10px;"></div>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px;">#子供の進路相談</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px; margin-right: 30px">#</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;">#</button>

    </div>
  </div>
  <footer>
    <div class=text-center>
      <p>Copyright ©Welcome Todo All rights reserved.</p>
  </footer>
<script src="{{ asset('/js/clickTag.js') }}"></script>
<script src="{{ asset('/js/generalTop.js') }}"></script>

@endsection
