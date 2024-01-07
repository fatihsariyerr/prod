<div class="page-section pb-0">
      <div class="container">
      <form action="{{url('sonucugonder')}}" method="POST" >
        @csrf
        <div class="input-group">
        <input id="formid" name="formid" type="text" value="{{session()->get('form')}}" style="display:none;" class="form-control">
      <input id="privateid" name="privateid" type="text" value="{{session()->get('privateid')}}" style="display:none;" class="form-control">
    </div>
        <div class="form-group">
    <label>Bebek sırt üstü yatarken ellerini seyreder mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru14" id="radio_0" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_0" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru14" id="radio_1" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_1" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Kendi kendine ya da beslenirken ağlama dışında ses
 çıkarır mı? Cevap evetse "ne sesler çıkarır?" (En az iki
 farklı ses olması mmm, sss, ah, uf, da, ma, ga, ka gibi)
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru15" id="radio_2" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_2" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru15" id="radio_3" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_3" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Siz gıdıklamadan, dokunmadan yüksek sesle güler mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru16" id="radio_4" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_4" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru16" id="radio_5" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_5" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Azarlandığı zaman yüzünün şekli değişir mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru17" id="radio_6" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_6" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru17" id="radio_7" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_7" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Püre yada lapa gibi besinler yer mi?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru18" id="radio_8" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_8" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru18" id="radio_9" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_9" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Elindeki oyuncağı, ekmeği ağzına götürür mü</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru19" id="radio_10" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_10" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru19" id="radio_11" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_11" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Biraz uzaktaki oyuncaklara eşyalara uzanır mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru20" id="radio_12" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_12" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru20" id="radio_13" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_13" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Eşyaları eline alıp bakar mı?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru21" id="radio_14" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_14" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru21" id="radio_15" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_15" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
    
  <div class="form-group">
    <label>Bebek çıngırağı bir elinden öbür eline geçirir mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru22" id="radio_18" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_18" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru22" id="radio_19" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_19" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Elinin uzanabileceği yere oyuncak koysanız onu tutar mı?
</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru23" id="radio_20" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_20" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru23" id="radio_21" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_21" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Önüne konan kibrit kutusu büyüklüğünde bir kutuyu eline
 alır mı? (kibrit kutusu büyüklüğünü elinizle gösteriniz)</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru24" id="radio_22" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_22" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru24" id="radio_23" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_23" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Bisküvi ve kabut ekmek ile diş etlerini kaşır, onları emer mi?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru25" id="radio_24" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_24" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru25" id="radio_25" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_25" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label>Küçük parçalar halindeki yiyecekleri alıp ağzına götürür mü?</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru26" id="radio_26" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_26" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru26" id="radio_27" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_27" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Annesine, babasına sarılarak sevgisini gösterir mi</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru27" id="radio_28" type="radio" class="custom-control-input" value="1"> 
        <label for="radio_28" class="custom-control-label">Evet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="soru27" id="radio_29" type="radio" class="custom-control-input" value="0"> 
        <label for="radio_29" class="custom-control-label">Hayır</label>
      </div>
    </div>
  </div>
  <div class="form-group">
  <button type="submit" style="background-color:green;"class="btn btn-primary mt-3 wow zoomIn">Sonucu Gönder</button>
  </div>

</form>
</div>  </div>

