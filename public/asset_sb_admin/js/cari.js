$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

function cari() {
    
        if($inputsearch==''){
             $('#container').html('');
             $('#container').hide();
        }else{
            $.ajax({
                method:"post",
                url:'/',
                data:JSON.stringify({
                    inputsearch : $inputsearch
                }),
                headers : {
                    'Accept':'application/json',
                    'Content-Type' : 'application/json'
                },
                success : function (data){
                    var searchResultAjax='';
                    data = JSON.parse(data);
                    console.log(data);
                    $('#container').show();
                    for (let i = 0; i < data.length; i++) {
                        // const element = array[i];
                        // searchResultAjax = data[i].indonesia + ' : ' + data[i].allang;
                        if($inputsearch == data[i].indonesia){
                        searchResultAjax +=`<div class="row">
                        
                        <div class="col text-center">
                            <hr>
                            <h3>Hasil Pencarian </h3>
                            <h4><span class="badge badge-warning">`+data[i].indonesia+`</span> 
                                <em><i>artinya adalah <span class="text-black bg-warning small">`+data[i].allang+`</span></i></em> <small><i>`+data[i].singkatan+`</i></small>
                            </h4>
                        <div class="card">
                            <div class="card-body">
                              <blockquote class="blockquote mb-0">
                                <p><strong>Contoh Kalimat </strong> : `+data[i].kalimat_allang+`</p>
                                <p><strong>Arti Kalimat </strong>   : `+data[i].kalimat_indo+`</p>
                                <footer class="blockquote-footer"><cite title="Source Title"> Sumber : Kamus Hina Alane</cite></footer>
                              </blockquote>
                            </div>
                          </div>
                        <hr>
              
                        </div>
                      </div>`;
                        }else{
                        searchResultAjax +=`<div class="row">
                        
                        <div class="col text-center">
                            <hr>
                            <h3>Hasil Pencarian </h3>
                            <h4><span class="badge badge-warning">`+data[i].allang+`</span> 
                                <em><i>artinya adalah <span class="text-black bg-warning small">`+data[i].indonesia+`</span></i></em> <small><i>`+data[i].singkatan+`</i></small>
                            </h4>
                        <div class="card">
                            <div class="card-body">
                              <blockquote class="blockquote mb-0">
                                <p><strong>Contoh Kalimat</strong> : `+data[i].kalimat_allang+`</p>
                                <p><strong>Arti Kalimat </strong>  : `+data[i].kalimat_indo+`</p>
                                <footer class="blockquote-footer"><cite title="Source Title"> Sumber : Kamus Hina Alane</cite></footer>
                              </blockquote>
                            </div>
                          </div>
                        <hr>
              
                        </div>
                      </div>`;
                        }
                        
                    }
                    $('#container').html(searchResultAjax);
                }
            })
        }
}
$(document).ready(function () {
    //Event Ketika keyword ditulis
    $('#keyword').on('keyup',function () {
        $inputsearch = $(this).val();
        $inputsearch = $inputsearch.toLowerCase();
        cari($inputsearch);
    }) 
    $('#keyword').on('keyup',function (e) {
        $inputsearch = $(this).val();
        $inputsearch = $inputsearch.toLowerCase();
        if(e.keyCode===13){
           cari($inputsearch);
        }
        
    }) 
});