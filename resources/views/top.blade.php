@extends('layouts.admin')
@section('title','Todo一覧')

@section('content')
<div class="container">
  <div class="easy-login text-center mt-3 w-100">
    <p>採用ご担当者様はこちらの簡易テストログインをご利用下さい。</p>
    <a class="btn btn-primary" href="">簡易テストログイン</a>
  </div>
  <h2 class="top-title text-center text-info">おかえりTodo</h2>
  <div class="text-center">
    <img src="{{ asset('image/topWelcome.jpg') }}" style="width: 85%;" alt="top image">
  </div>
  <h3 class="suggest-msg text-center">帰国時の予定を建てましょう</h3>
  <div class="main-tag-group">
    <button class="btn main-tag btn-primary btn-lg" onclick="clickTag1()">#家族と会う</button>
    <button class="btn main-tag btn-primary btn-lg" onclick="clickTag2()">#買い物に行く</button>
    <button class="btn main-tag btn-primary btn-lg" onclick="clickTag3()">#お土産を買う</button>
    <button class="btn main-tag btn-primary btn-lg" onclick="clickTag4()">#日本食を食べる</button>
  </div>
  <div class="form-container">
    <div class="input-box my-3">
      <div class="input-form-set mr-1">
        <input type="text" id="inputTodoText" placeholder="Todoを入力しましょう">
        <i class="fas fa-list-ul" aria-hidden="true"></i>
      </div>
      <button class="btn btn-outline-primary" onclick="clickTextTotal()">Todo追加</button>
    </div>
    <form action="{{ action('TopController@create') }}" method="post" name="form1">
      <div class="form-wrap">
        <div class="text-center mt-4">
          <div class="form-area" id="formArea" class="w-100" name="text2"></div>
        </div>
        @csrf
        @if (count($errors) > 0)
            <p class="top-form-alert">Todoタグを選択するか入力フォームでTodo追加をしてください</p>
        @endif
        <div class="d-none d-sm-block">
          <div class="text-right">
            <div class="btn-group">
              <div class="btn btn-secondary" onclick="clickClear()" >クリア</div>
              <button class="btn btn-success ml-2" id="output-for-listtodo " type="submit">リストを出力する</button>
            </div>
          </div>
        </div>
        <div class="d-block d-sm-none">
          <div class="button-group">
            <div class="btn-group-vertical">
              <div class="btn btn-secondary mt-2" onclick="clickClear()" >クリア</div>
              <button class="btn btn-success mt-2" id="output-for-listtodo " type="submit">リストを出力する</button>
            </div>
          </div>
        </div>
        <p class="text-right mt-2">リストを出力するには<a href="/login">ログイン</a>が必要です。</p>
      </div>  
    </form>   
  </div>
  <div class="tag-container text-center">
    <div class="meet-container">
      <h4 class="subject-item">約束・人と会う</h4>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag1()">#家族と会う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag5()">#友達と会う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag6()">#恋人に会う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag7()">#親戚に会う</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag8()">#兄弟に会う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag9()">#同僚に会う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag10()">#本社へあいさつ</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag11()">#交流会に参加</button>
      </div>  
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag12()">#恩人に会う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag13()">#上司に会う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag14()">#部下に会う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag15()">#顧客に会う</button>
      </div>
    </div>
    <div class="shopping-container">
      <h4 class="subject-item">買い物</h4>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag2()">#買い物に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag17()">#服を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag18()">#化粧を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag19()">#本を買う</button>
      </div> 
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag20()">#薬を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag3()">#お土産を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag21()">#お菓子を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag22()">#仕事着を買う</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag23()">#メガネを買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag24()">#お酒を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag25()">#文房具を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag26()">#100円SHOPに行く</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag27()">#ゲームを買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag28()">#スマホを買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag29()">#調味料を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag30()">#PCを買う</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag31()">#スーパーに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag32()">#冠婚葬祭用品を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag33()">#スーツケースを買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" style="border-radius: 20px; " onclick="clickTag34()">#家電を買う</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag35()">#子供の服を買う</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag36()">#ドラッグストアに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag37()">#ユニクロに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag38()">#スーツを買う</button>
      </div>
    </div>  
    <div class="entertain-container">
      <h4 class="subject-item">娯楽・レジャー</h4>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag39()">#映画観賞</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag40()">#温泉に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag41()">#国内旅行</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag42()">#美容室に行く</button>
      </div>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag43()">#ドライブに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag44()">#カラオケに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag45()">#遊園地に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag46()">#水族館に行く</button>
      </div>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag47()">#キャンプをする</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag48()">#カフェに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag49()">#マッサージに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag50()">#公園に行く</button>
      </div>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag51()">#家電量販店に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag52()">#海に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag53()">#スキー場に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag54()">#野球観戦</button>
      </div>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag55()">#サッカー観戦</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag56()">#スーパー銭湯に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag57()">#飲みに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag58()">#エステに行く</button>
      </div>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag59()">#ネイルサロンに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag60()">寺社仏閣の見学</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag61()">#お祭り行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag62()">#子供と遊ぶ</button>
      </div>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag63()">#ディズニーに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag64()">猫カフェに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag65()">#ネットカフェに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag66()">#コンサートに行く</button>
      </div>
    </div>
    <div class="meal-container">
      <h4 class="subject-item">食事</h4>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag4()">#日本食を食べる</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag67()">#寿司を食べる</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag68()">#ラーメンを食べる</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag69()">#カレーを食べる</button>
      </div>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag70()">#とんかつを食べる</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag71()">#うどんを食べる</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag72()">#そばを食べる</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag73()">#焼肉を食べる</button>
      </div>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag74()">#天ぷらを食べる</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag75()">#ビュッフェに行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag76()">#スイーツを食べに行く</button>
      </div>
    </div>
    <div class="procedure-container">
        <h4 class="subject-item">手続き関連</h4>
      <div class="tag-line">
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag77()">#役所に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag78()">#運転免許の更新</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" style="border-radius: 20px; " onclick="clickTag79()">#住民票手続き</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag80()">#大使館に行く</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag81()">#両替</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag82()">#病院に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag83()">#歯医者に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag84()">#wifi手続き</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag85()">#銀行に行く</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag86()">#荷物の発送</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag87()">#予防接種を受ける</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag88()">#カード類手続き</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag89()">#人間ドッグ</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag90()">#現金引き出し</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag91()">#レンタル品の返却</button>
        <button class="btn btn-tag btn-primary btn-lg m-2 sub-tag" onclick="clickTag92()">#子供の進路相談</button>
      </div>
      <div class="tag-line">  
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag93()">#チケットの購入</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag94()">#バスの予約</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag95()">#新幹線の予約</button>
        <button class="btn btn-tag btn-primary btn-lg m-2" onclick="clickTag96()">#保険の加入</button>
      </div>
    </div>  
  </div>
</div>
<footer>
  <div class=text-center>
    <p class="my-5">Copyright ©おかえりTodo All rights reserved.</p>
</footer>
<script src="{{ asset('/js/clickTag.js') }}"></script>
<script src="{{ asset('/js/generalTop.js') }}"></script>
@endsection
