


{{-- dd($card->options->image)  --}}
<div id="mymodel" class="model">
  <div class="model-content">
    <div class="modal-header">
      <span class="close" data-close="model">&times;</span>
      <h4>Khách hàng : {{$item->name}} | {{$item-> id}}</h4>
    </div>
    <div class="modal-body">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">giá</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $card)
          <tr>
            <td><img src="{{ asset('images/' . $card->options->image) }}" width="100px" alt="" /></td>
            <td>{{$card->qty}}</td>
            <td>{{ number_format($card->price) . '.000 ' . 'VNĐ' }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <form action="{{URL::to('update-modal/'.$item->id )}}" method="post">
      {{ csrf_field() }}
      <div class="modal-body_content">
          <div class="modal-body_content_item">
            <div class="form-check">
              <input class="form-check-input" type="radio" value="Đang chờ" name="status" id="status1">
              <label class="form-check-label oder_status-secondary" for="status1">
                Đang chờ
              </label>
            </div>
            <div class="form-check mt-4">
              <input class="form-check-input" value="Xác nhận" type="radio" name="status" id="status2" checked>
              <label class="form-check-label oder_status-success" for="status2">
                Xác nhận
              </label>
            </div>
            <div class="form-check mt-4">
              <input class="form-check-input" value="Hủy bỏ" type="radio" name="status" id="status3" checked>
              <label class="form-check-label oder_status-danger " for="status3">
                Hủy bỏ
              </label>
            </div>
          </div>
          <div class="modal-body_content_item">
            <p><span>Số điện thoại</span><span> {{$item->phone}}</span></p>
            <p><span>Địa chỉ</span><span>{{$item->address}}</span> </p>
            <p><span>Ghi chú</span><span> {{$item->note}}</span></p>
          </div>
      </div>
      <div class="d-grid gap-2 mt-4">
        <button class="btn btn-outline-success" type="submit">Cập nhật</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script>
  $('[data-id="model"]').on("click", function () {
    var thisModel = $(this).data("target");
    $(thisModel).show();
    $(thisModel)
      .find('[data-close="model"]')
      .click(function () {
        $(thisModel).hide();
      });
    $(window).click(function (event) {
      if ("#" + event.target.id == thisModel) {
        $(thisModel).hide();
      }
    });
  });
</script>