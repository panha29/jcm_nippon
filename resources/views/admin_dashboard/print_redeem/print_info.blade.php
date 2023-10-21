<link href="https://fonts.googleapis.com/css2?family=Nokora&display=swap" rel="stylesheet">
<div class="address">
    <p class="label">ឈ្មោះអតិថិជន <i style="margin-left: 5px">:</i> {{$item->customer_name}} </p>
    <p class="label">ទូរស័ព្ទអតិថិជន <i style="margin-left: 2px">:</i> {{$item->customer_phone}} </p>
    <p class="label">កាលបរិច្ឆេទ <i style="margin-left: 18px">:</i> {{$item->redeem_date}} </p>
    <p class="label">NOTE <i style="margin-left: 39px">:</i> {{$item->redeem_note}} </p>
    <p class="label">OTHER <i style="margin-left: 32px">:</i> {{$item->redeem_special}} </p>
</div>

<style>
    .label{
        line-height: 20px !important;
    }
    header h1 {
    margin: 0 0 7px !important;
}
</style>
<script>
    console.log('{{$item->customer_phone}}')
</script>

