/* This is a compiled file, you should be editing the file in the templates directory */
.pace {
  -webkit-pointer-events: none;
  pointer-events: none;

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;

  z-index: 2000;
  position: fixed;
  height: 90px;
  width: 90px;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.pace.pace-inactive .pace-activity {
  display: none;
}

.pace .pace-activity {
  position: fixed;
  z-index: 2000;
  display: block;
  position: absolute;
  left: -30px;
  top: -30px;
  height: 90px;
  width: 90px;
  display: block;
  border-width: 30px;
  border-style: double;
  border-color: #d6d6d6 transparent transparent;
  border-