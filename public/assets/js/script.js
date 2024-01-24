function get_content_by_url(urls) {
    $.ajax({
      url: urls,
      type: "GET", /* or type:"GET" or type:"PUT" */
      dataType: "json",
      data: {
      },
      success: function (result) {
        console.log(result);
  
        var tempData = '';
  
        result.forEach(data => {
          // console.log(data['small_image'][0]['id']);
          // console.log(data['small_image'][0]['url']);
          // console.log(data['small_image'][0]);
          tempData = tempData.concat(`
            <div class="search-item-1">
                <div class="result">
                    <p>Judul: ${data['Title']}</p>
                    <br>
                    <p>Kecocokan: ${data['Relevance']}</p>
                </div>
            </div>
          `);
        });
  
        $('#content-container').html(tempData);
      },
      error: function () {
          console.log("error");
      }
    });
}

function get_content() {
    keyword = $('#keyword').val();
    console.log(keyword)
    const urls = `http://127.0.0.1:1234/cluster?keyword=${keyword}`;
  
    get_content_by_url(urls);
}