@extends('main.sidebar')
@section('konten')
<style>
.timeline-item{
  padding-bottom: 50px;
}
</style>
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-cog"></i> Pengaturan</a></li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
         <div class="col-md-12">
         <div class="timeline">
             
              <div>
                <i class="fas fa-home bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                  <h3 class="timeline-header"><a href="#">Profile Sekolah</a></h3>
                </div>
              </div>
              @foreach($setting as $row)
              <div>
                <i class="fas fa-cog bg-purple"></i>
                <div class="timeline-item">
                  @if($row->siswa_update_data == true)
                  <span class="time"><a class="btn btn-link btn-xs" href="{{url('pengaturan/siswa-update-data/'.$row->id)}}">Nonaktifkan</a></span>
                  @elseif($row->siswa_update_data == false)
                  <span class="time"><a class="btn btn-link btn-xs" href="{{url('pengaturan/siswa-update-data/'.$row->id)}}">Aktifkan</a></span>
                  @endif
                  <h3 class="timeline-header no-border"><a href="#">Siswa memperbaharui data</a></h3>
                </div>
              </div>
              <div>
                <i class="fas fa-cog bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"></span>
                  <h3 class="timeline-header no-border"><a href="#">Siswa melihat profile siswa lainnya</a></h3>
                </div>
              </div>
              <div>
                <i class="fas fa-cog bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"></span>
                  <h3 class="timeline-header no-border"><a href="#">Siswa melihat profile guru</a></h3>
                </div>
              </div>
              <div>
                <i class="fas fa-cog bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"></span>
                  <h3 class="timeline-header no-border"><a href="#">Guru memperbaharui data</a></h3>
                </div>
              </div>
              <div>
                <i class="fas fa-cog bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"></span>
                  <h3 class="timeline-header no-border"><a href="#">Guru memperbaharui data</a></h3>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      </div>
   </section>
</div>
@endsection
