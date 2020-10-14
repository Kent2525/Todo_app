@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
<div class="container">
  <div class="text-center mt-3">
    <p>採用ご担当者様はこちらの簡易新規ログインページをご利用下さい。</p>
    <a class="btn btn-primary" href="">簡易新規登録＆ログイン</a>
    <a class="btn btn-primary" href="/todo">Todo一覧</a>
  </div>
  <h1 class="topTitle mt-5 text-center text-info">おかえりTodo</h1>
  <!-- <h3 class="topTitle text-center">- 帰国Todo -</h3> -->
  <div class="text-center">
    <img src="{{ asset('image/topWelcome.jpg') }}" style="width: 75%;" alt="top image">
  </div>
  <h3 class="text-center">帰国時の予定を建てましょう</h3>
  <div class="top-main-tag">
    <button class="btn btn-primary btn-lg tagChild m-3" style="border-radius: 20px;" onclick="clickTag1()" type="button">#家族と会う</button>
    <button class="btn btn-primary btn-lg tagChild m-3" style="border-radius: 20px;" onclick="clickTag2()" type="button">#買い物に行く</button>
    <button class="btn btn-primary btn-lg tagChild m-3" style="border-radius: 20px;" onclick="clickTag3()">#お土産を買う</button>
    <button class="btn btn-primary btn-lg tagChild m-3" style="border-radius: 20px;" onclick="clickTag4()">#日本食を食べる</button>
  </div>
  <!-- <div class="text-center">
  <div class="row justify-content-center">
    <div class="col-3">
      <div class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px ;" onclick="clickTag1()" type="button">#家族と会う</div>

      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;" onclick="clickTag2()" type="button">#買い物に行く</button>
      <button class="btn btn_tag btn-primary btn-lg"  style="border-radius: 20px;" onclick="clickTag3()">#お土産を買う</button>
      <button class="btn btn_tag btn-primary btn-lg" style="border-radius: 20px;"  onclick="clickTag4()">#日本食を食べる</button>
  </div>
  </div> -->
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
    <p>リストを出力するには登録が必要です。</p>
  </form>  
  <div class="tagContainer text-center">
    <div class="meetContainer">
      <h4 style="margin-bottom: 20px;">人と会う</h4>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag1()">#家族と会う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag5()">#友達と会う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag6()">#恋人に会う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag7()">#親戚に会う</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag8()">#兄弟に会う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag9()">#同僚に会う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag10()">#本社へあいさつ</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag11()">#交流会に参加</button>
      </div>  
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag12()">#恩人に会う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag13()">#上司に会う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag14()">#部下に会う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag15()">#顧客に会う</button>
      </div>
    </div>
    <div class="shoppingContainer">
      <h4 style="margin: 20px 0;">買い物</h4>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag2()">#買い物に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag17()">#服を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag18()">#化粧を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag19()">#本を買う</button>
      </div> 
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag20()">#薬を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag3()">#お土産を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag21()">#お菓子を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag22()">#仕事着を買う</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag23()">#メガネを買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag24()">#お酒を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag25()">#文房具を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag26()">#100円SHOPに行く</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag27()">#ゲームを買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag28()">#スマホを買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag29()">#調味料を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag30()">#PCを買う</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag31()">#スーパーに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag32()">#冠婚葬祭用品を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag33()">#スーツケースを買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag34()">#家電を買う</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag35()">#子供の服を買う</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag36()">#ドラッグストアに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag37()">#ユニクロに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag38()">#スーツを買う</button>
      </div>
    </div>  
    <div class="entertainContainer">
      <h4 style="margin: 20px 0;">娯楽・レジャー</h4>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag39()">#映画観賞</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag40()">#温泉に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag41()">#国内旅行</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag42()">#美容室に行く</button>
      </div>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag43()">#ドライブに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag44()">#カラオケに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag45()">#遊園地に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag46()">#水族館に行く</button>
      </div>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag47()">#キャンプをする</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag48()">#カフェに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag49()">#マッサージに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag50()">#公園に行く</button>
      </div>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag51()">#家電量販店に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag52()">#海に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag53()">#スキー場に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag54()">#野球観戦</button>
      </div>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag55()">#サッカー観戦</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag56()">#スーパー銭湯に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag57()">#飲みに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag58()">#エステに行く</button>
      </div>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag59()">#ネイルサロンに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag60()">寺社仏閣の見学</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag61()">#お祭り行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag62()">#子供と遊ぶ</button>
      </div>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag63()">#ディズニーに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag64()">猫カフェに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag65()">#ネットカフェに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag66()">#コンサートに行く</button>
      </div>
    </div>
    <div class="mealContainer">
      <h4 style="margin: 20px 0;">食事</h4>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag4()">#日本食を食べる</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag67()">#寿司を食べる</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag68()">#ラーメンを食べる</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag69()">#カレーを食べる</button>
      </div>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag70()">#とんかつを食べる</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag71()">#うどんを食べる</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag72()">#そばを食べる</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag73()">#焼肉を食べる</button>
      </div>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag74()">#天ぷらを食べる</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag75()">#ビュッフェに行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag76()">#スイーツを食べに行く</button>
      </div>
    </div>
    <div class="procedureContainer">
        <h4 style="margin: 20px 0;">手続き関連</h4>
      <div class="tag-line">
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag77()">#役所に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag78()">#運転免許の更新</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag79()">#住民票手続き</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag80()">#大使館に行く</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag81()">#両替</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag82()">#病院に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag83()">#歯医者に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag84()">#wifi手続き</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag85()">#銀行に行く</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag86()">#荷物の発送</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag87()">#予防接種を受ける</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag88()">#カード類手続き</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag89()">#人間ドッグ</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag90()">#現金引き出し</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag91()">#レンタル品の返却</button>
        <button class="btn btn_tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px;" onclick="clickTag92()">#子供の進路相談</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag93()">#チケットの購入</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag94()">#バスの予約</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag95()">#新幹線の予約</button>
        <button class="btn btn_tag btn-primary btn-lg m-2" style="border-radius: 20px;" onclick="clickTag96()">#保険の加入</button>
      </div>
    </div>  
  </div>
</div>
    <footer>
      <div class=text-center>
        <p>Copyright ©Welcome Todo All rights reserved.</p>
    </footer>

<script src="{{ asset('/js/clickTag.js') }}"></script>
<script src="{{ asset('/js/generalTop.js') }}"></script>

@endsection
