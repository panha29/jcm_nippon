<style>
    .modal-btn {
  transition: background 250ms;
  padding: 16px 24px;
  border-radius: 4px;
  background-color: #0f0f0f;
  color: #fcfcfc;
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 0.1em;
  margin-top: 32px;
  display: inline-block;
  text-decoration: none;
}
.modal-btn:hover,
.modal-btn:focus {
  background-color: #0f0f0fdd;
}
.modal {
  position: fixed;
  min-height: 100vh;
  width: 100%;
  top: 0;
  left: 0;
  display: flex;
  z-index: 2;
}
.modal-overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  background-color: rgba(0, 0, 0, 0.5);
  left: 0;
}
.modal-content {
  transition: transform 1s;
  background: #fff;
  position: relative;
  margin: 212px auto auto auto;
  height: 340px;
  padding: 48px 24px;
  border-radius: 4px;
  max-width: 420px;
  border-radius: 15px;
}
.modal-close {
  font-size: 36px;
  text-decoration: none;
  color: inherit;
  position: absolute;
  right: 24px;
  top: 10px;

}
.modal:not(:target) {
  display: none;
}
.modal:not(:target) {
  visibility: hidden;
  transition-delay: 500ms;
  transition-property: visibility;
}
.modal:target .modal-content {
  transform: translateY(100vh);
  animation: 500ms ease-in-out slideUp forwards;
}
.modal:not(:target) .modal-content {
  transform: translateY(0);
  animation: 500ms ease-out slideDown forwards;
}
.modal:target .modal-overlay {
  opacity: 0;
  animation: 500ms linear fadeIn forwards;
}
@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes slideUp {
  from {
    transform: translateY(100vh);
  }
  to {
    transform: translateY(0);
  }
}
@keyframes slideDown {
  from {
    transform: translateY(0);
  }
  to {
    transform: translateY(100vh);
  }
}
.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}
.btn-primary {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}
.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
button, select {
    text-transform: none;
}
button, input {
    overflow: visible;
}
.b-right{
    margin-top: 150px;
    float: right;
}
</style>
<a id="modal-btn" class="modal-btn btn-danger" href="#modal">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin mb-3 d-inline-block">
        <path d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5"></path>
        <path d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path>
        <path d="M2 5H18M12 9V13M8 9V13"></path>
    </svg>
</a>
<section role="dialog" class="modal" id="modal" aria-labelledby="modal-title">
  <a class="modal-overlay" href="#modal-btnn"></a>
  <div class="modal-content">
    <a title="Close modal" aria-label="Close modal" href="#modal-btn" class="modal-close">&times; </a>
    <h4 id="modal-title"> Are you sure, you want to delete? </h4>
    <div class="b-right">
        <a href="/User/Name/{{ Auth::user()->id }}" class="btn btn-success">Im sure!</a>
        <a href="/User/Name" class="btn btn-danger">No</a>
    </div>
  </div>
</section>
