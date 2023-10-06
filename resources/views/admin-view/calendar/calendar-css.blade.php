<style>
    /* .progress {
    height: 1rem;
    border-radius: var(--border-radius-md);
    background-color: var(--separator-light);
} */

button {
    cursor: pointer;
}

* {
    /* -webkit-user-select: none; */
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.bkingimg {
    width: 100%;
    border-radius: 15px;
}

.labelkh {
    font-size: 16px !important;
    font-weight: 550 !important;
    font-family: 'Nokora', sans-serif !important;
}
.pjlabelkh{
    vertical-align: middle;
    font-size: 12px;
    font-weight: 550;
    font-family: 'Nokora', sans-serif;
}

.pjlabelkh-height{
    height: 80px;
}
th {
    font-size: 16px !important;
    font-weight: 550 !important;
    font-family: 'Nokora', sans-serif !important;
    text-align: center !important;
    /* background-color: var(--primary) !important; */
    /* color: white !important; */
}

/* .progress-modal {
    font-size: 14px !important;
    font-weight: 550 !important;
    font-family: 'Nokora', sans-serif !important;
}

.progress{
    height: 2rem;
    border-radius: var(--border-radius-md);
    background-color: var(--separator-light);
    font-size: 13px;
} */

.top-label label:not(.form-check-label),
.top-label>span:last-of-type {
    position: absolute;
    cursor: text;
    font-size: 1em !important;
    line-height: 1.1rem !important;
    opacity: 4;
    top: 0.5rem;
    left: 0.75rem;
    z-index: 1;
    line-height: 1;
    padding: 0 1px;
    background: var(--foreground);
}

.projectimg {
    width: 50%;
    border-radius: 15px;
    padding: 5px;
}

.dataTables_filter{
    display: none !important;
}
    body{
        background-color: #e7e7e7;
    }
    tr{
        vertical-align: middle;
    }

    .dataTables_wrapper .dataTables_length {
float: right;
position: relative;
top: -50px;
}
.dropdown-menu a:hover, .dropdown-menu a.active, .dropdown-menu .dropdown-item:hover, .dropdown-menu .dropdown-item.active, .dropdown-menu .nav-link:hover, .dropdown-menu .nav-link.active {
    background-color: initial;
    background-color: #aa830f !important;
    color: white !important;
    border-radius: 50px !important;
}

progress[value] {
  --background: conic-gradient(#31c6f7 var(--p),lightgrey 0);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border: none;
  position: absolute;
  /* inset: 0; */
  height: 100%;
  width: 100%;
  border-radius: 50%;
  margin: auto;
  overflow: hidden;
  background: var(--background);
  -webkit-mask: radial-gradient(#0000 59%,#000 60% 70%,#0000 71%)
}
progress[value]::-webkit-progress-bar {
  background: var(--background);
}
progress[value]::-webkit-progress-value {
  background: #0000;
}
progress[value]::-moz-progress-bar {
  background: #0000;
}

label {
  --w: 80px; /* the width*/

  font-size: 15px;
  font-weight: bold;
  display: inline-grid;
  place-content: center;
  width: var(--w);
  aspect-ratio: 1;
  position: relative;
}

</style>
