<html dir="ltr" lang="en"><head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="edge://resources/css/md_colors.css">
  <link rel="stylesheet" href="edge://resources/css/text_defaults_md.css">
  <link rel="stylesheet" href="index.css">
  <!-- Enable error-reporting -->
  <script src="pdf-error-reporting.js"></script>
<style>/** Copyright (C) Microsoft Corporation. All rights reserved.
 * Use of this source code is governed by a BSD-style license that can be
 * found in the LICENSE file.
 */

.msreadout-word-highlight {
    background: #FCFCFC !important;
    color: black !important;
    mix-blend-mode: multiply !important;
}

.msreadout-line-highlight {
    background: #C5C5C5 !important;
    color: black !important;
    mix-blend-mode: multiply !important;
}

.msreadout-background-highlight {
    background-color: rgba(184,184,184,0.82) !important;
    color: black !important;
}

.msreadout-inactive-highlight {
    background: #C5C5C5 !important;
    color: black !important;
    mix-blend-mode: multiply !important;
}

/* The below apart of the code for high-contrast handling */
@media screen and (-ms-high-contrast: active) {
    .msreadout-word-highlight {
        -ms-high-contrast-adjust: none;
        background: none !important;
        border-style: solid !important;
        border-width: medium !important;
        border-color: Highlight !important;
        mix-blend-mode: normal !important;
    }

    .msreadout-line-highlight {
        -ms-high-contrast-adjust: none;
        background: none !important;
        color: black !important;
        mix-blend-mode: multiply !important;
    }

    .msreadout-background-highlight {
        background-color: rgba(184,184,184,0.82) !important;
        color: black !important;
    }

    .msreadout-inactive-highlight {
        background: Highlight !important;
        color: HighlightText !important;
        mix-blend-mode: multiply !important;
    }
}</style><style data-jss="" data-meta="Tk">
.c01169 {
  float: left;
  width: 40px;
  font-size: 107.6923%;
  text-align: center;
  box-shadow: 0 0.3px 0.9px rgba(0, 0, 0, 0.11), 0 1.6px 3.6px rgba(0, 0, 0, 0.13);
  line-height: 40px;
  font-family: system-ui, sans-serif;
  font-weight: 600;
  border-radius: 2px;
  background-color: #4A4A4A;
}
.c01170 {
  float: left;
  width: 0;
  height: 0;
  display: inline;
  border-top: 6px solid transparent;
  margin-top: 14px;
  border-left: 8px solid;
  border-bottom: 6px solid transparent;
  border-left-color: #4A4A4A;
}
.c01171 {
  left: unset;
  right: unset;
  display: flex;
  z-index: 2;
  opacity: 0;
  position: fixed;
  transition: opacity 400ms ease-in-out;
  visibility: hidden;
}
</style><style data-jss="" data-meta="Caret">
.c01168 {
  stroke: #000000;
  z-index: 3;
  position: absolute;
  pointer-events: none;
}
@media (-ms-high-contrast:active) {
  .c01168 {
    stroke: WindowText;
    -ms-high-contrast-adjust: none;
  }
}
</style><style data-jss="" data-meta="eg">
.c01165 {
  width: 100%;
  position: fixed;
}
.c01166 {
  z-index: 4;
}
.c01167 {
  z-index: 3;
}
</style><style data-jss="" data-meta="TextNotePreview">
.c01163 {
  z-index: 3;
  position: absolute;
  pointer-events: none;
  box-shadow: 0px 12.8px 28.8px rgba(0,0,0,0.25569638034578496), 0px 0px 9.2px rgba(0,0,0,0.21635847567720265);
  background: #4A4A4A;
  padding: 12px;
  border-radius: 4px;
}
@media (-ms-high-contrast:active) {
  .c01163 {
    background: Window;
    -ms-high-contrast-adjust: none;
    border: 1px solid ButtonText;
  }
}
.c01164 {
  z-index: 3;
  position: absolute;
  background: rgba(0, 0, 0, 0.1);
  pointer-events: none;
}
@media (-ms-high-contrast:active) {
  .c01164 {
    background: none;
    -ms-high-contrast-adjust: none;
    border: 1px solid ButtonText;
  }
}
</style><style data-jss="" data-meta="ProgressBar">
.c01162 {
  top: 41px;
  left: 0;
  right: 0;
  width: auto;
  bottom: 0;
  margin: 0;
  position: absolute;
}
</style><style data-jss="" data-meta="MSFTButtonBase">
.c01153 {
  position: relative;
}
.c01153::before {
  width: 100%;
  bottom: -3px;
  content: '';
  display: block;
  position: absolute;
  height: 1px;
  left: 0;
}
.c01153 svg {
}
.c01154 {
  cursor: not-allowed !important;
  opacity: 0.3;
}
@media (-ms-high-contrast:active) {
  .c01154 {
    color: GrayText;
    opacity: 1;
  }
}
.c01155 {
  display: flex;
  min-width: 20px;
  min-height: 20px;
  align-items: center;
  justify-content: center;
}
.c01156 {
}
.c01157 {
}
.c01158 {
}
.c01159 {
}
.c01160 {
}
.c01160 .c01156 {
  margin-right: 10px;
}
.c01160 .c01157 {
  margin-left: 10px;
}
.c01161 {
  cursor: pointer;
  display: inline-flex;
  overflow: hidden;
  max-width: 374px;
  box-sizing: border-box;
  transition: all 0.1s ease-in-out;
  line-height: 1;
  font-family: inherit;
  align-items: center;
  white-space: nowrap;
  justify-content: center;
  text-decoration: none;
  font-size: 14px;
  border: 2px solid transparent;
  border-radius: 2px;
  min-width: 32px;
  padding: 0 8px;
  height: 32px;
  color: #FFFFFF;
  fill: #FFFFFF;
  background: #3B3B3B;
}
.c01161::-moz-focus-inner {
  border: 0;
}
.c01161:hover:enabled {
  background-color: #484848;
}
.c01161:active:enabled {
  background-color: #424242;
}
.c01161:focus {
  outline: none;
}
.c01161:focus-visible {
  border-color: #909090;
}
.c01161:disabled {
}
@media (-ms-high-contrast:active) {
  .c01161 {
    fill: ButtonText;
    color: ButtonText;
    background: ButtonFace;
    border-color: ButtonFace;
    -ms-high-contrast-adjust: none;
  }
}
a.c01161 {
}
@media (-ms-high-contrast:active) {
  a.c01161 {
    fill: LinkText !important;
    color: LinkText !important;
    background: Window;
    border-color: LinkText !important;
  }
}
a.c01161:not(.c01154):hover {
  background-color: #484848;
}
a.c01161:not(.c01154):active {
  background-color: #424242;
}
a.c01161:focus {
  outline: none;
}
a.c01161:focus-visible {
  border-color: #909090;
}
a.c01161.c01154 {
}
a.c01161.c01154:focus-visible {
  border-color: transparent;
}
@media (-ms-high-contrast:active) {
  a.c01161.c01154:focus-visible {
    background: ButtonFace !important;
    box-shadow: none;
  }
}
@media (-ms-high-contrast:active) {
  a.c01161.c01154 {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
    background: ButtonFace !important;
    border-color: GrayText !important;
  }
}
@media (-ms-high-contrast:active) {
  a.c01161:focus-visible {
    background: LinkText !important;
  }
}
@media (-ms-high-contrast:active) {
  a.c01161:not(.c01154):hover {
    fill: HighlightText !important;
    color: HighlightText !important;
    background: LinkText !important;
  }
}
@media (-ms-high-contrast:active) {
  .c01161:disabled {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
    background: ButtonFace !important;
    border-color: GrayText !important;
  }
}
@media (-ms-high-contrast:active) {
  .c01161:focus-visible {
    fill: HighlightText !important;
    color: HighlightText !important;
    background: Highlight;
    box-shadow: none;
  }
}
@media (-ms-high-contrast:active) {
  .c01161:hover:enabled {
    fill: HighlightText;
    color: HighlightText;
    background: Highlight;
  }
}
</style><style data-jss="" data-meta="BaseTypography">
.c01143 {
  margin-top: 0;
  transition: all 0.2s ease-in-out;
  margin-bottom: 0;
  color: #FFFFFF;
}
.c01144 {
  font-size: 60px;
  line-height: 72px;
}
.c01145 {
  font-size: 46px;
  line-height: 56px;
}
.c01146 {
  font-size: 34px;
  line-height: 44px;
}
.c01147 {
  font-size: 28px;
  line-height: 36px;
}
.c01148 {
  font-size: 20px;
  line-height: 28px;
}
.c01149 {
  font-size: 16px;
  line-height: 24px;
}
.c01150 {
  font-size: 14px;
  line-height: 20px;
}
.c01151 {
  font-size: 12px;
  line-height: 16px;
}
.c01152 {
  font-size: 10px;
  line-height: 16px;
}
</style><style data-jss="" data-meta="MSFTTextField">
.c01141 {
  margin: 0;
  box-sizing: border-box;
  transition: all 0.2s ease-in-out;
  font-family: inherit;
  font-size: 14px;
  line-height: 20px;
  font-weight: 400;
  background: #3B3B3B;
  border: 1px solid #7B7B7B;
  color: #FFFFFF;
  padding: 0 11px;
  border-radius: 2px;
  height: 32px;
}
.c01141:hover:enabled {
  background: #3B3B3B;
  border-color: #A2A2A2;
}
.c01141:active:enabled {
  background: #3B3B3B;
  border-color: #646464;
}
.c01141:focus:enabled {
  outline: none;
  box-shadow: 0 0 0 1px #909090 inset;
  border-color: #909090;
}
.c01141:disabled {
  cursor: not-allowed !important;
  opacity: 0.3;
}
.c01141::placeholder {
  color: #A7A7A7;
}
@media (-ms-high-contrast:active) {
  .c01141 {
    color: ButtonText;
    background: ButtonFace;
    border-color: ButtonText;
    -ms-high-contrast-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c01141::placeholder {
    color: GrayText;
  }
}
@media (-ms-high-contrast:active) {
  .c01141:disabled {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
    background: ButtonFace !important;
    border-color: GrayText !important;
  }
}
@media (-ms-high-contrast:active) {
  .c01141:focus:enabled {
    border-color: ButtonText;
    box-shadow: 0 0 0 1px inset ButtonText;
  }
}
@media (-ms-high-contrast:active) {
  .c01141:hover:enabled {
    background: ButtonFace;
    border: 1px solid Highlight;
  }
}
.c01142 {
  margin: 0;
  box-sizing: border-box;
  transition: all 0.2s ease-in-out;
  font-family: inherit;
  font-size: 14px;
  line-height: 20px;
  font-weight: 400;
  background: #4D4D4D;
  border: 1px solid transparent;
  color: #FFFFFF;
  padding: 0 11px;
  border-radius: 2px;
}
.c01142:hover:enabled {
  border-color: transparent;
  background: #545454;
}
.c01142:active:enabled {
  border-color: transparent;
}
.c01142:focus:enabled {
  border-color: #909090;
}
.c01142:disabled {
  cursor: not-allowed !important;
  opacity: 0.3;
}
.c01142::placeholder {
  color: #BEBEBE;
}
@media (-ms-high-contrast:active) {
  .c01142 {
    background: ButtonFace;
    border-color: ButtonText;
    -ms-high-contrast-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c01142::placeholder {
    color: GrayText;
  }
}
@media (-ms-high-contrast:active) {
  .c01142:disabled {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
    background: ButtonFace !important;
    border-color: GrayText !important;
  }
}
@media (-ms-high-contrast:active) {
  .c01142:hover:enabled {
    background: ButtonFace;
    border: 1px solid Highlight;
  }
}
</style><style data-jss="" data-meta="PageSelector">
.c01137 {
  display: flex;
  align-items: center;
}
.c01138 {
  padding-left: 2px;
}
.c01139 {
  width: 40px;
  height: 32px;
  text-align: center;
  padding-left: 4px;
  border-radius: 2px;
  padding-right: 4px;
  font-size: 12px;
  line-height: 16px;
}
.c01139:disabled {
  cursor: default !important;
}
.c01140 {
  margin: 0 8px 0 10px;
  user-select: none;
  white-space: nowrap;
}
</style><style data-jss="" data-meta="MSFTButton">
.c0174 {
  cursor: pointer;
  display: inline-flex;
  overflow: hidden;
  max-width: 374px;
  box-sizing: border-box;
  transition: all 0.1s ease-in-out;
  line-height: 1;
  font-family: inherit;
  align-items: center;
  white-space: nowrap;
  justify-content: center;
  text-decoration: none;
  font-size: 14px;
  min-width: 32px;
  padding: 0 8px;
  height: 32px;
  border: 2px solid transparent;
  border-radius: 2px;
  color: #FFFFFF;
  fill: #FFFFFF;
  background: #4D4D4D;
}
.c0174:hover:enabled, a.c0174:not(.c0181):hover {
  background: #545454;
}
.c0174:active:enabled, a.c0174:not(.c0181):active {
  background: #484848;
}
.c0174:focus {
  outline: none;
}
.c0174:focus-visible {
  border-color: #909090;
}
.c0174:disabled {
}
.c0174::-moz-focus-inner {
  border: 0;
}
@media (-ms-high-contrast:active) {
  .c0174 {
    fill: ButtonText;
    color: ButtonText;
    background: ButtonFace;
    border-color: ButtonText;
    -ms-high-contrast-adjust: none;
  }
}
a.c0174:not(.c0181) {
}
@media (-ms-high-contrast:active) {
  a.c0174:not(.c0181) {
    fill: LinkText !important;
    color: LinkText !important;
    background: Window;
    border-color: LinkText !important;
  }
}
a.c0174:not(.c0181):not(.c0181):hover {
}
a.c0174:not(.c0181).c0181 {
}
@media (-ms-high-contrast:active) {
  a.c0174:not(.c0181).c0181 {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
    background: ButtonFace !important;
    border-color: GrayText !important;
  }
}
a.c0174:not(.c0181).c0181:hover {
}
@media (-ms-high-contrast:active) {
  a.c0174:not(.c0181).c0181:hover {
    box-shadow: none !important;
  }
}
@media (-ms-high-contrast:active) {
  a.c0174:not(.c0181):not(.c0181):hover {
    background: ButtonFace;
    box-shadow: 0 0 0 1px inset LinkText !important;
  }
}
a.c0174:not(.c0181):not(.c0181):hover .c0185, a.c0174:not(.c0181):not(.c0181):hover .c0186 {
}
@media (-ms-high-contrast:active) {
  a.c0174:not(.c0181):not(.c0181):hover .c0185, a.c0174:not(.c0181):not(.c0181):hover .c0186 {
    fill: LinkText !important;
    color: LinkText !important;
  }
}
@media (-ms-high-contrast:active) {
  .c0174:disabled {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
    background: ButtonFace !important;
    border-color: GrayText !important;
  }
}
@media (-ms-high-contrast:active) {
  .c0174:focus-visible {
    border-color: ButtonText;
    box-shadow: 0 0 0 1px inset ButtonText;
  }
}
@media (-ms-high-contrast:active) {
  .c0174:hover:enabled, a.c0174:not(.c0181):hover {
    fill: HighlightText;
    color: HighlightText;
    background: Highlight;
  }
}
.c0174:hover:enabled .c0185, .c0174:hover:enabled .c0186, a.c0174:not(.c0181):hover .c0185, a.c0174:not(.c0181):hover .c0186 {
}
@media (-ms-high-contrast:active) {
  .c0174:hover:enabled .c0185, .c0174:hover:enabled .c0186, a.c0174:not(.c0181):hover .c0185, a.c0174:not(.c0181):hover .c0186 {
    fill: HighlightText !important;
    color: HighlightText !important;
  }
}
.c0175 {
  color: #FFFFFF;
  fill: #FFFFFF;
  background: #006CBE;
}
.c0175:hover:enabled, a.c0175:not(.c0181):hover {
  background: #0078D4;
}
.c0175:active:enabled, a.c0175:not(.c0181):active {
  background: #005CA3;
}
.c0175:focus {
  outline: none;
}
.c0175:focus-visible {
  border-color: #909090;
  box-shadow: 0 0 0 2px inset #003B68;
}
.c0175 .c0185, .c0175 .c0186 {
  fill: #FFFFFF;
}
@media (-ms-high-contrast:active) {
  .c0175 {
    fill: HighlightText;
    color: HighlightText;
    background: Highlight;
    border-color: Highlight;
    -ms-high-contrast-adjust: none;
  }
}
a.c0175:not(.c0181) {
}
a.c0175:not(.c0181) .c0185, a.c0175:not(.c0181) .c0186 {
}
@media (-ms-high-contrast:active) {
  a.c0175:not(.c0181) .c0185, a.c0175:not(.c0181) .c0186 {
    fill: LinkText !important;
    color: LinkText !important;
  }
}
@media (-ms-high-contrast:active) {
  .c0175:focus-visible {
    border-color: ButtonText !important;
    box-shadow: 0 0 0 2px inset ButtonFace;
  }
}
@media (-ms-high-contrast:active) {
  .c0175:hover:enabled, a.c0175:not(.c0181):hover {
    fill: Highlight;
    color: Highlight;
    background: HighlightText;
    border-color: Highlight;
  }
}
.c0176 {
  background: transparent;
  border: 1px solid #7B7B7B;
  padding: 0 9px;
}
.c0176:hover:enabled, a.c0176:not(.c0181):hover {
  background: transparent;
  border: 1px solid #A2A2A2;
}
.c0176:active:enabled, a.c0176:not(.c0181):active {
  background: transparent;
  border: 1px solid #646464;
}
.c0176:focus {
  outline: none;
}
.c0176:focus-visible {
  box-shadow: 0 0 0 1px #909090 inset;
  border-color: #909090;
}
@media (-ms-high-contrast:active) {
  .c0176 {
    fill: ButtonText;
    color: ButtonText;
    background: ButtonFace;
    border-color: ButtonText;
    -ms-high-contrast-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c0176:focus-visible {
    border-color: ButtonText;
    box-shadow: 0 0 0 1px inset ButtonText;
  }
}
@media (-ms-high-contrast:active) {
  .c0176:hover:enabled, a.c0176:not(.c0181):hover {
    fill: HighlightText;
    color: HighlightText;
    background: Highlight;
  }
}
.c0177 {
  background-color: transparent;
  color: #63ADE5;
  fill: #63ADE5;
}
.c0177:focus {
  outline: none;
}
.c0177:focus-visible {
  box-shadow: none;
  border-color: transparent;
}
.c0177 .c0180::before {
}
.c0177:hover .c0180::before {
  background: #7DBAE9;
}
.c0177:hover.c0181 .c0180::before {
  display: none;
}
.c0177:active .c0180::before {
  background: #52A3E2;
}
.c0177.c0181, .c0177.c0181 .c0180::before {
  background-color: transparent;
}
.c0177:hover:enabled, a.c0177:not(.c0181):hover {
  background-color: transparent;
  color: #7DBAE9;
}
.c0177:active:enabled, a.c0177:not(.c0181):active {
  background-color: transparent;
  color: #52A3E2;
  fill: #52A3E2;
}
@media (-ms-high-contrast:active) {
  .c0177 {
    fill: ButtonText;
    color: ButtonText;
    background: ButtonFace;
    border-color: ButtonFace;
    -ms-high-contrast-adjust: none;
  }
}
a.c0177:not(.c0181) {
}
a.c0177:not(.c0181):not(.c0181):hover {
}
a.c0177:not(.c0181).c0181 {
}
a.c0177:not(.c0181) .c0180::before {
}
@media (-ms-high-contrast:active) {
  a.c0177:not(.c0181) .c0180::before {
    background: transparent;
  }
}
@media (-ms-high-contrast:active) {
  a.c0177:not(.c0181).c0181 {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
    background: ButtonFace !important;
    border-color: GrayText !important;
  }
}
@media (-ms-high-contrast:active) {
  a.c0177:not(.c0181):not(.c0181):hover {
    fill: LinkText !important;
    color: LinkText !important;
    box-shadow: none !important;
  }
}
a.c0177:not(.c0181):not(.c0181):hover .c0180::before {
}
@media (-ms-high-contrast:active) {
  a.c0177:not(.c0181):not(.c0181):hover .c0180::before {
    background: LinkText !important;
  }
}
@media (-ms-high-contrast:active) {
  .c0177:hover:enabled, a.c0177:not(.c0181):hover {
    fill: Highlight !important;
    color: Highlight !important;
  }
}
.c0177:hover:enabled .c0185, .c0177:hover:enabled .c0186, a.c0177:not(.c0181):hover .c0185, a.c0177:not(.c0181):hover .c0186 {
  fill: #7DBAE9;
}
@media (-ms-high-contrast:active) {
  .c0177:hover:enabled .c0185, .c0177:hover:enabled .c0186, a.c0177:not(.c0181):hover .c0185, a.c0177:not(.c0181):hover .c0186 {
    fill: Highlight !important;
    color: Highlight !important;
  }
}
@media (-ms-high-contrast:active) {
  .c0177:hover .c0180::before {
    background: Highlight;
  }
}
@media (-ms-high-contrast:active) {
  .c0177 .c0180::before {
    background: ButtonText;
  }
}
@media (-ms-high-contrast:active) {
  .c0177:focus-visible {
    fill: Highlight !important;
    color: Highlight !important;
  }
}
.c0177:focus-visible .c0180::before {
  background: #FFFFFF;
  height: 2px;
}
@media (-ms-high-contrast:active) {
  .c0177:focus-visible .c0180::before {
    background: Highlight;
  }
}
.c0178 {
  min-width: 74px;
  padding-left: 0;
  border-width: 0;
  padding-right: 0;
  justify-content: flex-start;
  background-color: transparent;
  color: #63ADE5;
  fill: #63ADE5;
}
.c0178:focus {
  outline: none;
}
.c0178:focus-visible {
  box-shadow: none;
  border-color: transparent;
}
.c0178 .c0180::before {
}
.c0178:hover .c0180::before {
  background: #7DBAE9;
}
.c0178:hover.c0181 .c0180::before {
  display: none;
}
.c0178:active .c0180::before {
  background: #52A3E2;
}
.c0178.c0181, .c0178.c0181 .c0180::before {
  background-color: transparent;
}
.c0178:hover:enabled, a.c0178:not(.c0181):hover {
  background-color: transparent;
  color: #7DBAE9;
}
.c0178:active:enabled, a.c0178:not(.c0181):active {
  background-color: transparent;
  color: #52A3E2;
  fill: #52A3E2;
}
@media (-ms-high-contrast:active) {
  .c0178 {
    fill: ButtonText;
    color: ButtonText;
    background: ButtonFace;
    border-color: ButtonFace;
    -ms-high-contrast-adjust: none;
  }
}
a.c0178:not(.c0181) {
}
a.c0178:not(.c0181):not(.c0181):hover {
}
a.c0178:not(.c0181).c0181 {
}
@media (-ms-high-contrast:active) {
  a.c0178:not(.c0181).c0181 {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
    background: ButtonFace !important;
    border-color: GrayText !important;
  }
}
@media (-ms-high-contrast:active) {
  a.c0178:not(.c0181):not(.c0181):hover {
    fill: LinkText !important;
    color: LinkText !important;
    box-shadow: none !important;
  }
}
a.c0178:not(.c0181):not(.c0181):hover .c0180::before {
}
@media (-ms-high-contrast:active) {
  a.c0178:not(.c0181):not(.c0181):hover .c0180::before {
    background: LinkText !important;
  }
}
@media (-ms-high-contrast:active) {
  .c0178:hover:enabled, a.c0178:not(.c0181):hover {
    fill: Highlight !important;
    color: Highlight !important;
  }
}
.c0178:hover:enabled .c0185, .c0178:hover:enabled .c0186, a.c0178:not(.c0181):hover .c0185, a.c0178:not(.c0181):hover .c0186 {
  fill: #7DBAE9;
}
@media (-ms-high-contrast:active) {
  .c0178:hover:enabled .c0185, .c0178:hover:enabled .c0186, a.c0178:not(.c0181):hover .c0185, a.c0178:not(.c0181):hover .c0186 {
    fill: Highlight !important;
    color: Highlight !important;
  }
}
@media (-ms-high-contrast:active) {
  .c0178:hover .c0180::before {
    background: Highlight;
  }
}
@media (-ms-high-contrast:active) {
  .c0178 .c0180::before {
    background: ButtonText;
  }
}
@media (-ms-high-contrast:active) {
  .c0178:focus-visible {
    fill: Highlight !important;
    color: Highlight !important;
  }
}
.c0178:focus-visible .c0180::before {
  background: #FFFFFF;
  height: 2px;
}
@media (-ms-high-contrast:active) {
  .c0178:focus-visible .c0180::before {
    background: Highlight;
  }
}
.c0179 {
  background: #3B3B3B;
}
.c0179:hover:enabled, a.c0179:not(.c0181):hover {
  background-color: #484848;
}
.c0179:active:enabled, a.c0179:not(.c0181):active {
  background-color: #424242;
}
.c0179:focus {
  outline: none;
}
.c0179:focus-visible {
  border-color: #909090;
}
@media (-ms-high-contrast:active) {
  .c0179 {
    fill: ButtonText;
    color: ButtonText;
    background: ButtonFace;
    border-color: ButtonFace;
    -ms-high-contrast-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c0179:focus-visible {
    border-color: ButtonText;
    box-shadow: 0 0 0 1px inset ButtonText;
  }
}
@media (-ms-high-contrast:active) {
  .c0179:hover:enabled, a.c0179:not(.c0181):hover {
    fill: HighlightText;
    color: HighlightText;
    background: Highlight;
  }
}
.c0180 {
  position: relative;
}
.c0180::before {
  width: 100%;
  bottom: -3px;
  content: '';
  display: block;
  position: absolute;
  height: 1px;
  left: 0;
}
.c0180 svg {
}
.c0181 {
  cursor: not-allowed !important;
  opacity: 0.3;
}
@media (-ms-high-contrast:active) {
  .c0181 {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
    background: ButtonFace !important;
    border-color: GrayText !important;
  }
}
.c0181 .c0185, .c0181 .c0186 {
}
@media (-ms-high-contrast:active) {
  .c0181 .c0185, .c0181 .c0186 {
    fill: GrayText !important;
    color: GrayText !important;
    opacity: 1;
  }
}
.c0182 {
  display: flex;
  min-width: 20px;
  min-height: 20px;
  align-items: center;
  justify-content: center;
}
.c0183 {
}
.c0184 {
}
.c0185 {
}
.c0186 {
}
.c0187 {
}
.c0187 .c0183 {
  margin-right: 10px;
}
.c0187 .c0184 {
  margin-left: 10px;
}
</style><style data-jss="" data-meta="PdfBarButton">
.c0163 {
  width: 40px;
  height: 32px;
}
@media (-ms-high-contrast:active) {
  .c0163 {
    background: Window;
    -ms-high-contrast-adjust: none;
  }
  .c0163:focus {
    outline: none;
  }
  .c0163:focus-visible {
    outline: solid 2px Window;
    outline-offset: -4px;
  }
}
.c0163 + .c0173 {
}
.c0163 + .c0173:focus {
  outline: none;
}
.c0163 + .c0173:focus-visible {
  background-color: transparent;
}
.c0164 {
  width: auto;
  user-select: none;
  padding-left: 12px;
  padding-right: 12px;
}
.c0165 {
  width: auto;
  user-select: none;
  padding-left: 0px;
}
.c0166 {
  width: 36px;
}
.c0167 {
}
.c0168 {
  display: flex;
  align-items: center;
  justify-content: center;
}
.c0169 {
  width: 20px;
  height: 20px;
}
.c0170 {
  width: 16px;
  height: 16px;
}
.c0171 {
  white-space: nowrap;
  margin-left: 10px;
  font-weight: 400;
}
.c0172 {
  background-color: #4D4D4D;
}
@media (-ms-high-contrast:active) {
  .c0172 {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
  .c0172:hover:enabled {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
}
.c0173 {
  width: 100%;
  height: 2px;
  position: absolute;
  margin-top: -6px;
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
  background-color: #63ADE5;
}
@media (-ms-high-contrast:active) {
  .c0173 {
    background: Highlight;
    -ms-high-contrast-adjust: none;
  }
}
</style><style data-jss="" data-meta="MSFTButton - jssStyleSheet">
.c0188 {
  min-width: unset;
  margin-top: 4px;
  margin-bottom: 4px;
}
.c0189 {
  cursor: default;
}
.c0189:disabled {
  cursor: default !important;
}
.c0189 .innerContainer {
  display: flex;
  align-items: center;
  justify-content: center;
}
.c0189 .icon {
  width: 20px;
  height: 20px;
}
.c0189 .label {
  white-space: nowrap;
  font-weight: 400;
  margin-left: 6px;
  direction: ltr;
}
.c0190 {
  cursor: default !important;
}
</style><style data-jss="" data-meta="Toolbar">
.c0154 {
  width: 100%;
  display: flex;
  padding: 0 8px;
  position: relative;
  box-sizing: border-box;
  align-items: center;
  justify-content: space-between;
  height: 41px;
  border-bottom: 1px solid #4F4F4F;
  box-shadow: 0px 4.8px 10.8px rgba(0,0,0,0.26), 0px 0px 4.7px rgba(0,0,0,0.22);
}
@media (max-width: 1470px) {
  .c0154 {
    justify-content: unset;
  }
}
@media (-ms-high-contrast:active) {
  .c0154 {
    border: 1px solid WindowText;
    background: Background;
  }
}
.c0155 {
  top: 0;
  position: fixed;
  box-shadow: none;
}
.c0156 {
  display: flex;
  align-items: center;
}
.c0157 {
  width: 100%;
  display: grid;
  align-items: center;
  grid-template-columns: auto 420px;
}
@media (max-width: 1470px) {
  .c0157 {
    grid-template-columns: auto;
  }
}
@media (max-width: 790px) {
  .c0157 {
    display: none;
  }
}
.c0158 {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
@media (max-width: 1470px) {
  .c0158 {
    margin: 0 auto;
  }
}
.c0159 {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}
@media (max-width: 790px) {
  .c0159 {
    display: none;
  }
}
</style><style data-jss="" data-meta="PdfBarButton - jssStyleSheet">
.c0191 {
  width: 32px;
}
.c0192 {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  padding-right: 8px;
}
.c0193 {
  border-bottom-right-radius: 0;
}
</style><style data-jss="" data-meta="PdfBarButton - jssStyleSheet">
.c0194 {
  width: 28px;
  justify-content: right;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  padding-left: 8px;
  padding-right: 8px;
}
.c0195 {
  width: 12px;
  height: 12px;
}
.c0195 svg {
  width: 12px;
  height: 12px;
}
.c0196 {
  border-bottom-left-radius: 0;
}
</style><style data-jss="" data-meta="PdfBarButton - jssStyleSheet">
.c0197 {
}
.c0198 {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  padding-right: 8px;
}
.c0199 {
  border-bottom-right-radius: 0;
}
</style><style data-jss="" data-meta="PdfBarButton - jssStyleSheet">
.c01100 {
  width: 28px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  padding-left: 8px;
  padding-right: 8px;
}
.c01101 {
  width: 12px;
  height: 12px;
}
.c01101 svg {
  width: 12px;
  height: 12px;
}
.c01102 {
  border-bottom-left-radius: 0;
}
</style><style data-jss="" data-meta="PdfBarButton - jssStyleSheet">
.c01103 {
  height: none;
  position: fixed;
  transition: transform .5s cubic-bezier(0.25,0.10,0.25,1.00);
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI';
  padding-right: 4px;
  direction: ltr;
}
.c01104 {
  position: static;
}
.c01105 {
  display: flex;
}
.c01106 {
  display: flex;
}
.c01107 {
  display: flex;
  align-items: center;
}
.c01108 {
  visibility: hidden;
}
.c01109 {
  box-shadow: none;
  border-bottom: 0;
  background-color: transparent !important;
}
.c01110 {
  z-index: 1;
}
.c01111 {
  z-index: 2;
}
.c01112 {
  background-color: #4D4D4D;
}
@media (-ms-high-contrast:active) {
  .c01112 {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
  .c01112:hover:enabled {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
}
@-webkit-keyframes button_blink {
  0% {
    background-color: transparent;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  4% {
    background-color: #006CBE;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  8% {
    background-color: transparent;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  12% {
    background-color: #006CBE;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  16% {
    background-color: transparent;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  20% {
    background-color: #006CBE;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  100% {
    background-color: #006CBE;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
}
@-webkit-keyframes button_blink_high_contrast {
  0% {
    fill: ButtonText;
    color: ButtonText;
    background-color: ButtonFace;
  }
  4% {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
  8% {
    fill: ButtonText;
    color: ButtonText;
    background-color: ButtonFace;
  }
  12% {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
  16% {
    fill: ButtonText;
    color: ButtonText;
    background-color: ButtonFace;
  }
  20% {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
  100% {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
}
@-webkit-keyframes pulsating_animation {
  0% {
    r: 0;
    opacity: 100;
    stroke-width: 8;
  }
  30% {
    stroke-width: 8;
  }
  80% {
    opacity: 100;
  }
  91% {
    r: 18.75;
    opacity: 0;
    stroke-width: 0;
  }
  100% {
    r: 18.75;
    opacity: 0;
  }
}
@-webkit-keyframes hide_read_aloud_pulse {
  0% {
    opacity: 100;
  }
  100% {
    opacity: 0;
  }
}
.c01113 {
  z-index: 1;
  animation: hide_read_aloud_pulse 0s ease-in 60s forwards;
  pointer-events: none;
  margin-top: 20px;
  margin-left: -30px;
  margin-right: -18px;
  direction: ltr;
}
.c01114 {
  r: 0;
  cx: 24;
  cy: 24;
  animation: pulsating_animation 1.1s cubic-bezier(0.33, 1, 0.68, 1) 1s 2 forwards, scale 1.1s cubic-bezier(0.33, 1, 0.68, 1) 1s 2 forwards;
  stroke-width: 8;
  stroke-linecap: round;
  animation-delay: 500ms;
  stroke: #006CBE;
}
@media (-ms-high-contrast:active) {
  .c01114 {
    stroke: ButtonText;
  }
}
.c01115 {
  r: 3;
  cx: 24;
  cy: 24;
  stroke-linecap: round;
  fill: #006CBE;
}
@media (-ms-high-contrast:active) {
  .c01115 {
    fill: ButtonText;
  }
}
.c01116 {
  top: 30px;
  right: -50px;
  z-index: 1;
  position: relative;
}
.c01117 {
  color: #ffffff;
  padding: 6px 12px 6px 12px;
  font-size: 14px;
  background: #222222;
  margin-top: 7px;
  white-space: nowrap;
  border-radius: 4px;
}
.c01118 {
  float: right;
  margin-right: 24px;
}
.c01119 {
  overflow: visible;
  background-color: transparent;
}
.c01119 .tooltiptext {
  position: absolute;
  visibility: hidden;
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.14);
  color: #FFFFFF;
  background: #3B3B3B;
  font-weight: 400;
  min-width: 156px;
  line-height: 20px;
  border: 2px solid #7B7B7B;
  top: 26px;
  padding: 16px;
  border-radius: 2px;
  right: -10px;
  direction: ltr;
}
.c01119:hover {
}
.c01119:focus {
}
.c01119:focus .tooltiptext {
  visibility: visible;
}
.c01119:hover .tooltiptext {
  visibility: visible;
}
@media (-ms-high-contrast:active) {
  .c01119 .tooltiptext {
    color: WindowText;
    border: 1px solid WindowText;
    background: Window;
    -ms-high-contrast-adjust: none;
  }
}
.c01120 {
  animation: button_blink 10s cubic-bezier(.25,.1,.25,1) 1s alternate;
  animation-delay: 500ms;
}
@media (-ms-high-contrast:active) {
  .c01120 {
    animation: button_blink_high_contrast 10s cubic-bezier(.25,.1,.25,1) 1s alternate;
  }
}
.c01121 {
  width: 280px;
  z-index: 1;
  position: absolute;
  overflow-x: hidden;
  overflow-y: auto;
  max-height: calc(100vh - 60px);
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI';
  background-color: inherit;
  box-shadow: 0px 12.8px 28.8px rgba(0,0,0,0.2543144461965935), 0px 0px 9.2px rgba(0,0,0,0.21518914678173293);
  padding-top: 8px;
  padding-bottom: 8px;
  direction: ltr;
}
@media not all and (prefers-reduced-motion: reduce) {
  .c01121 {
    border-radius: 4px;
  }
}
@media (-ms-high-contrast:active) {
  .c01121 {
    border: 1px solid WindowText;
    background-color: Window;
  }
}
.c01121::-webkit-scrollbar {
  width: 4px;
  height: 4px;
}
.c01121::-webkit-scrollbar-track {
  opacity: 0;
}
.c01121::-webkit-scrollbar-thumb {
  border-radius: 2px;
  background: #858585;
}
.c01121::-webkit-scrollbar-thumb:hover {
  background: #9F9F9F;
}
.c01121::-webkit-scrollbar-thumb:active {
  background: #929292;
}
.c01121::-webkit-scrollbar-corner {
  background: none;
}
@media (-ms-high-contrast:active) {
  .c01121::-webkit-scrollbar-thumb:active {
    background: Highlight;
    forced-color-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c01121::-webkit-scrollbar-thumb:hover {
    background: Highlight;
    forced-color-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c01121::-webkit-scrollbar-thumb {
    background: ButtonText;
    forced-color-adjust: none;
  }
}
.c01122 {
  transform: translateY(-100%);
  box-shadow: none;
}
.c01123 {
  height: 100%;
}
.c01124 {
}
@media not all and (-ms-high-contrast:active) {
  .c01124 {
    fill: #F29900;
  }
@media (prefers-color-scheme: dark) {
  .c01124 {
    fill: #FDD663;
  }
}
}
.c01125 {
}
.c01125 .shouldAnimate {
  opacity: 0;
}
.c01126 {
}
.c01126 .shouldAnimate {
  opacity: 100;
  transition: opacity 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
  transition-delay: 300ms;
}
.c01127 {
}
.c01127 .shouldAnimate {
  opacity: 100;
}
.c01128 {
}
.c01128 .shouldAnimate {
  opacity: 0;
  transition: opacity 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
}
.c01129 {
}
.c01129 .shouldAnimate {
  transform: translateY(-100%);
}
.c01130 {
}
.c01130 .shouldAnimate {
  transform: translate(0px, 0px);
  transition: transform 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
  transition-delay: 300ms;
}
.c01131 {
}
.c01131 .shouldAnimate {
  transform: translate(0px, 0px);
  transition: transform 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
}
.c01132 {
}
.c01132 .shouldAnimate {
  transform: translate(0px, 0px);
}
.c01133 {
}
.c01133 .shouldAnimate {
  transform: translateY(-100%);
  transition: transform 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
}
.c01134 {
}
.c01135 {
  width: unset;
  height: unset;
}
.c01136 {
}
.c01136 .tooltiptext {
  right: -14px;
  direction: ltr;
}
</style><style data-jss="" data-meta="ArrowKeyNavigator(PdfBarRevamp)">
.c013 {
  height: none;
  position: fixed;
  transition: transform .5s cubic-bezier(0.25,0.10,0.25,1.00);
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI';
  padding-right: 4px;
  direction: ltr;
}
.c014 {
  position: static;
}
.c015 {
  display: flex;
}
.c016 {
  display: flex;
}
.c017 {
  display: flex;
  align-items: center;
}
.c018 {
  visibility: hidden;
}
.c019 {
  box-shadow: none;
  border-bottom: 0;
  background-color: transparent !important;
}
.c0110 {
  z-index: 1;
}
.c0111 {
  z-index: 2;
}
.c0112 {
  background-color: #454545;
}
@media (-ms-high-contrast:active) {
  .c0112 {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
  .c0112:hover:enabled {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
}
@-webkit-keyframes button_blink {
  0% {
    background-color: transparent;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  4% {
    background-color: #006CBE;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  8% {
    background-color: transparent;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  12% {
    background-color: #006CBE;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  16% {
    background-color: transparent;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  20% {
    background-color: #006CBE;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
  100% {
    background-color: #006CBE;
    color: #FFFFFF;
    fill: #FFFFFF;
  }
}
@-webkit-keyframes button_blink_high_contrast {
  0% {
    fill: ButtonText;
    color: ButtonText;
    background-color: ButtonFace;
  }
  4% {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
  8% {
    fill: ButtonText;
    color: ButtonText;
    background-color: ButtonFace;
  }
  12% {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
  16% {
    fill: ButtonText;
    color: ButtonText;
    background-color: ButtonFace;
  }
  20% {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
  100% {
    fill: HighlightText;
    color: HighlightText;
    background-color: Highlight;
  }
}
@-webkit-keyframes pulsating_animation {
  0% {
    r: 0;
    opacity: 100;
    stroke-width: 8;
  }
  30% {
    stroke-width: 8;
  }
  80% {
    opacity: 100;
  }
  91% {
    r: 18.75;
    opacity: 0;
    stroke-width: 0;
  }
  100% {
    r: 18.75;
    opacity: 0;
  }
}
@-webkit-keyframes hide_read_aloud_pulse {
  0% {
    opacity: 100;
  }
  100% {
    opacity: 0;
  }
}
.c0113 {
  z-index: 1;
  animation: hide_read_aloud_pulse 0s ease-in 60s forwards;
  pointer-events: none;
  margin-top: 20px;
  margin-left: -30px;
  margin-right: -18px;
  direction: ltr;
}
.c0114 {
  r: 0;
  cx: 24;
  cy: 24;
  animation: pulsating_animation 1.1s cubic-bezier(0.33, 1, 0.68, 1) 1s 2 forwards, scale 1.1s cubic-bezier(0.33, 1, 0.68, 1) 1s 2 forwards;
  stroke-width: 8;
  stroke-linecap: round;
  animation-delay: 500ms;
  stroke: #006CBE;
}
@media (-ms-high-contrast:active) {
  .c0114 {
    stroke: ButtonText;
  }
}
.c0115 {
  r: 3;
  cx: 24;
  cy: 24;
  stroke-linecap: round;
  fill: #006CBE;
}
@media (-ms-high-contrast:active) {
  .c0115 {
    fill: ButtonText;
  }
}
.c0116 {
  top: 30px;
  right: -50px;
  z-index: 1;
  position: relative;
}
.c0117 {
  color: #ffffff;
  padding: 6px 12px 6px 12px;
  font-size: 14px;
  background: #222222;
  margin-top: 7px;
  white-space: nowrap;
  border-radius: 4px;
}
.c0118 {
  float: right;
  margin-right: 24px;
}
.c0119 {
  overflow: visible;
  background-color: transparent;
}
.c0119 .tooltiptext {
  position: absolute;
  visibility: hidden;
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.14);
  color: #FFFFFF;
  background: #333333;
  font-weight: 400;
  min-width: 156px;
  line-height: 20px;
  border: 2px solid #737373;
  top: 26px;
  padding: 16px;
  border-radius: 2px;
  right: -10px;
  direction: ltr;
}
.c0119:hover {
}
.c0119:focus {
}
.c0119:focus .tooltiptext {
  visibility: visible;
}
.c0119:hover .tooltiptext {
  visibility: visible;
}
@media (-ms-high-contrast:active) {
  .c0119 .tooltiptext {
    color: WindowText;
    border: 1px solid WindowText;
    background: Window;
    -ms-high-contrast-adjust: none;
  }
}
.c0120 {
  animation: button_blink 10s cubic-bezier(.25,.1,.25,1) 1s alternate;
  animation-delay: 500ms;
}
@media (-ms-high-contrast:active) {
  .c0120 {
    animation: button_blink_high_contrast 10s cubic-bezier(.25,.1,.25,1) 1s alternate;
  }
}
.c0121 {
  width: 280px;
  z-index: 1;
  position: absolute;
  overflow-x: hidden;
  overflow-y: auto;
  max-height: calc(100vh - 60px);
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI';
  background-color: inherit;
  box-shadow: 0px 12.8px 28.8px rgba(0,0,0,0.25569638034578496), 0px 0px 9.2px rgba(0,0,0,0.21635847567720265);
  padding-top: 8px;
  padding-bottom: 8px;
  direction: ltr;
}
@media not all and (prefers-reduced-motion: reduce) {
  .c0121 {
    border-radius: 4px;
  }
}
@media (-ms-high-contrast:active) {
  .c0121 {
    border: 1px solid WindowText;
    background-color: Window;
  }
}
.c0121::-webkit-scrollbar {
  width: 4px;
  height: 4px;
}
.c0121::-webkit-scrollbar-track {
  opacity: 0;
}
.c0121::-webkit-scrollbar-thumb {
  border-radius: 2px;
  background: #7D7D7D;
}
.c0121::-webkit-scrollbar-thumb:hover {
  background: #979797;
}
.c0121::-webkit-scrollbar-thumb:active {
  background: #8A8A8A;
}
.c0121::-webkit-scrollbar-corner {
  background: none;
}
@media (-ms-high-contrast:active) {
  .c0121::-webkit-scrollbar-thumb:active {
    background: Highlight;
    forced-color-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c0121::-webkit-scrollbar-thumb:hover {
    background: Highlight;
    forced-color-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c0121::-webkit-scrollbar-thumb {
    background: ButtonText;
    forced-color-adjust: none;
  }
}
.c0122 {
  transform: translateY(-100%);
  box-shadow: none;
}
.c0123 {
  height: 100%;
}
.c0124 {
}
@media not all and (-ms-high-contrast:active) {
  .c0124 {
    fill: #F29900;
  }
@media (prefers-color-scheme: dark) {
  .c0124 {
    fill: #FDD663;
  }
}
}
.c0125 {
}
.c0125 .shouldAnimate {
  opacity: 0;
}
.c0126 {
}
.c0126 .shouldAnimate {
  opacity: 100;
  transition: opacity 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
  transition-delay: 300ms;
}
.c0127 {
}
.c0127 .shouldAnimate {
  opacity: 100;
}
.c0128 {
}
.c0128 .shouldAnimate {
  opacity: 0;
  transition: opacity 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
}
.c0129 {
}
.c0129 .shouldAnimate {
  transform: translateY(-100%);
}
.c0130 {
}
.c0130 .shouldAnimate {
  transform: translate(0px, 0px);
  transition: transform 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
  transition-delay: 300ms;
}
.c0131 {
}
.c0131 .shouldAnimate {
  transform: translate(0px, 0px);
  transition: transform 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
}
.c0132 {
}
.c0132 .shouldAnimate {
  transform: translate(0px, 0px);
}
.c0133 {
}
.c0133 .shouldAnimate {
  transform: translateY(-100%);
  transition: transform 500ms cubic-bezier(0.25, 0.10, 0.25, 1.00);
}
.c0134 {
}
.c0135 {
  width: unset;
  height: unset;
}
.c0136 {
}
.c0137 {
  display: flex;
  align-items: center;
}
.c0138 {
  display: flex;
  align-items: center;
}
.c0139 {
  display: flex;
  align-items: center;
}
.c0140 {
  display: flex;
  align-items: center;
}
.c0141 {
  display: flex;
  align-items: center;
}
.c0142 {
  display: flex;
  align-items: center;
}
.c0143 {
  margin: 0 4px;
  width: 1px;
  height: 16px;
  background: #737373;
}
@media (-ms-high-contrast:active) {
  .c0143 {
    background: WindowText;
    -ms-high-contrast-adjust: none;
  }
}
.c0144 {
}
.c0145 {
  box-shadow: none;
}
.c0146 {
  box-shadow: none;
}
.c0147 {
  height: 16px;
  width: 16px;
  margin-top: 4px;
}
.c0148 {
}
.c0148 path:last-child {
  fill: #98C698;
}
.c0148 path:last-child:hover {
}
@media (-ms-high-contrast:active) {
  .c0148 path:last-child {
    fill: Window;
    stroke: WindowText;
    -ms-high-contrast-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c0148 path:last-child:hover {
    fill: Highlight;
    stroke: Window;
    -ms-high-contrast-adjust: none;
  }
}
.c0149 {
}
.c0149 path:last-child {
  fill: #9D6600;
}
.c0149 path:last-child:hover {
}
@media (-ms-high-contrast:active) {
  .c0149 path:last-child {
    fill: Window;
    stroke: WindowText;
    -ms-high-contrast-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c0149 path:last-child:hover {
    fill: Highlight;
    stroke: Window;
    -ms-high-contrast-adjust: none;
  }
}
.c0150 {
}
.c0150 path:last-child {
  fill: #C36329;
}
.c0150 path:last-child:hover {
}
@media (-ms-high-contrast:active) {
  .c0150 path:last-child {
    fill: Window;
    stroke: WindowText;
    -ms-high-contrast-adjust: none;
  }
}
@media (-ms-high-contrast:active) {
  .c0150 path:last-child:hover {
    fill: Highlight;
    stroke: Window;
    -ms-high-contrast-adjust: none;
  }
}
.c0151 {
  padding-right: 8px;
}
.c0152 {
  transform: unset;
}
.c0153 {
  margin-top: 4px;
}
</style><style data-jss="" data-meta="Toolbar - jssStyleSheet">
.c0160 {
  height: none;
  position: relative;
  transition: transform .5s cubic-bezier(0.25,0.10,0.25,1.00);
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI';
  padding-left: 4px;
  padding-right: 4px;
  direction: ltr;
}
.c0161 {
  display: flex;
}
.c0162 {
  display: flex;
}
</style><style data-jss="" data-meta="PdfBarTransitionWrapper">
.c011 {
  transform: translateY(-100%);
}
.c012 {
  transform: translateY(0%);
}
</style><title>license.pdf</title></head>
<body>

  <!-- the contents of ui-container are react-based PDF UI components -->
  <div id="ui-container"><div style="background-color: rgb(51, 51, 51);"><div id="toolbar"><div class="c012" style="position: relative; width: 100%; height: auto; transition: transform 0.5s cubic-bezier(0.25, 0.1, 0.25, 1) 0s;"><div style="background-color: rgb(0, 0, 0);"><div class="c0154 c0160 c0136 c0145" role="toolbar" aria-label="PDF bar" style="background-color: rgb(59, 59, 59);"><div class="c0157 c0161"><div style="visibility: visible;"><div class="c0137"><div><div style="position: relative;"><button id="contents" aria-pressed="false" aria-expanded="false" aria-controls="contents-flyout" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Contents"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20" class=""><path d="M3 6.5a1 1 0 100-2 1 1 0 000 2z"></path><path d="M6 5.5c0-.28.22-.5.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z"></path><path d="M6 9.5c0-.28.22-.5.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z"></path><path d="M10.5 13a.5.5 0 000 1h7a.5.5 0 000-1h-7z"></path><path d="M8 13.5a1 1 0 11-2 0 1 1 0 012 0z"></path><path d="M3 10.5a1 1 0 100-2 1 1 0 000 2z"></path></svg></div></div></span></button></div></div><div class="c0140"><div class="c0143"></div><div class="c0137"><div style="position: relative;"><button id="highlight" aria-pressed="false" class="c0174 c0189 c0179 c0188 c0163 c0191 c0166" data-element-focusable="true" title="Highlight"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20"><path d="M3.5 2c.28 0 .5.22.5.5v4c0 .28.22.5.5.5h11a.5.5 0 00.5-.5v-4a.5.5 0 011 0v4c0 .65-.42 1.2-1 1.41V9a2 2 0 01-2 2v2.07a2 2 0 01-1.1 1.8l-6.18 3.08A.5.5 0 016 17.5V11a2 2 0 01-2-2V7.91c-.58-.2-1-.76-1-1.41v-4c0-.28.22-.5.5-.5zM5 8v1a1 1 0 001 1h8a1 1 0 001-1V8H5zm2 3v5.7l5.45-2.73a1 1 0 00.55-.9V11H7z"></path><path d="M16 3h-2v4h1.5a.5.5 0 00.5-.5V3zm-3 4V3H4v3.5c0 .28.22.5.5.5H13zm-6 9.7V11h6v2.07a1 1 0 01-.55.9L7 16.69z" class="accent" fill="none"></path></svg></div></div></span></button></div><div style="position: relative;"><button id="highlight-button-split" aria-expanded="false" aria-controls="highlight-flyout" class="c0174 c0189 c0179 c0188 c0163 c0194" data-element-focusable="true" title="Select a highlight color"><span class="c0180"><div class="c0168"><div class="c0169 c0195"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15.85 7.65c.2.2.2.5 0 .7l-5.46 5.49a.55.55 0 01-.78 0L4.15 8.35a.5.5 0 01.7-.7L10 12.8l5.15-5.16c.2-.2.5-.2.7 0z"></path></svg></div></div></span></button></div></div><div class="c0143"></div><div class="c0137"><div style="position: relative;"><button id="ink" aria-pressed="false" class="c0174 c0189 c0179 c0188 c0163 c0197 c0164 c0198" data-element-focusable="true" title="Draw"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M3 2c.28 0 .5.22.5.5v3c0 .28.22.5.5.5h12a.5.5 0 00.5-.5v-3a.5.5 0 011 0v3c0 .83-.67 1.5-1.5 1.5h-.2l-3.58 7.17a1.5 1.5 0 01-.75.71c.02.2.03.4.03.62 0 .58-.07 1.16-.27 1.62-.21.47-.6.88-1.23.88s-1.02-.41-1.23-.88a4.12 4.12 0 01-.27-1.62c0-.21.01-.42.03-.62a1.5 1.5 0 01-.75-.7L4.19 7H4a1.5 1.5 0 01-1.5-1.5v-3c0-.28.22-.5.5-.5zm6.12 12h1.76a.5.5 0 00.45-.28L14.69 7H5.31l3.36 6.72a.5.5 0 00.45.28zm.4 1l-.02.5c0 .52.07.94.19 1.21.11.26.22.29.31.29.1 0 .2-.03.31-.29.12-.27.19-.69.19-1.21 0-.18 0-.35-.02-.5h-.96z"></path><path d="M16.5 3H14v3h2a.5.5 0 00.5-.5V3zM13 6V3H3.5v2.5c0 .28.22.5.5.5h9zm-.55 1l-2.4 4.78a.5.5 0 10.9.44L13.56 7h-1.11zM9.5 15.5c0-.18 0-.35.02-.5h.96l.02.5c0 .52-.07.94-.19 1.21-.11.26-.22.29-.31.29-.1 0-.2-.03-.31-.29a3.17 3.17 0 01-.19-1.21z" class="accent" fill="none"></path></svg></div><div class="c0171">Draw</div></div></span></button></div><div style="position: relative;"><button id="ink-button-split" aria-expanded="false" aria-controls="ink-customisation-flyout" class="c0174 c0189 c0179 c0188 c0163 c01100" data-element-focusable="true" title="Select ink properties"><span class="c0180"><div class="c0168"><div class="c0169 c01101"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15.85 7.65c.2.2.2.5 0 .7l-5.46 5.49a.55.55 0 01-.78 0L4.15 8.35a.5.5 0 01.7-.7L10 12.8l5.15-5.16c.2-.2.5-.2.7 0z"></path></svg></div></div></span></button></div></div><div class="c0137"><div style="position: relative;"><button id="erase" aria-pressed="false" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Erase"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20" class=""><path d="M11.2 2.44a1.5 1.5 0 012.12 0l4.24 4.24a1.5 1.5 0 010 2.12L9.36 17h5.14a.5.5 0 010 1H7.82a1.5 1.5 0 01-1.14-.44l-4.24-4.24a1.5 1.5 0 010-2.12l8.76-8.76zm1.41.7a.5.5 0 00-.7 0L5.53 9.52l4.95 4.95 6.36-6.36a.5.5 0 000-.71l-4.24-4.24zM9.78 15.18l-4.95-4.95-1.69 1.69a.5.5 0 000 .7l4.25 4.25c.2.2.5.2.7 0l1.7-1.7z"></path></svg></div></div></span></button></div></div><div class="c0143"></div><div class="c0137"><div style="position: relative;"><button id="add-text" aria-pressed="false" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Add text"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20"><path d="M10.5 6H13V6.5C13 6.77614 13.2239 7 13.5 7C13.7761 7 14 6.77614 14 6.5V5.5C14 5.22386 13.7761 5 13.5 5H6.5C6.22386 5 6 5.22386 6 5.5V6.5C6 6.77614 6.22386 7 6.5 7C6.77614 7 7 6.77614 7 6.5V6H9.5V14H9C8.72386 14 8.5 14.2239 8.5 14.5C8.5 14.7761 8.72386 15 9 15H11C11.2761 15 11.5 14.7761 11.5 14.5C11.5 14.2239 11.2761 14 11 14H10.5V6ZM2 6C2 4.34315 3.34315 3 5 3H15C16.6569 3 18 4.34315 18 6V14C18 15.6569 16.6569 17 15 17H5C3.34315 17 2 15.6569 2 14V6ZM5 4C3.89543 4 3 4.89543 3 6V14C3 15.1046 3.89543 16 5 16H15C16.1046 16 17 15.1046 17 14V6C17 4.89543 16.1046 4 15 4H5Z"></path></svg></div></div></span></button></div></div><div class="c0143"></div><div class="c0137"><div style="position: relative;"><button id="read-aloud" class="c0174 c0189 c0179 c0188 c0163 c0165" data-element-focusable="true" title="Read aloud"><span class="c0180"><div class="c0168"><div class="c0171">Read aloud</div></div></span></button></div></div></div></div></div></div><div class="c0158"><div style="visibility: visible;"><div class="c0137"><div class="c0139"><div class="c0137"><div style="position: relative;"><button id="zoom-out" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Zoom out (Ctrl+Minus key)"><span class="c0180"><div class="c0168"><div class="c0170"><svg width="16" height="16" viewBox="0 0 16 16" class=""><path d="M3 8c0-.28.22-.5.5-.5h9a.5.5 0 010 1h-9A.5.5 0 013 8z"></path></svg></div></div></span></button></div><div style="position: relative;"><button id="zoom-in" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Zoom in (Ctrl+Plus key)"><span class="c0180"><div class="c0168"><div class="c0170"><svg width="16" height="16" viewBox="0 0 16 16" class=""><path d="M8 2.5a.5.5 0 00-1 0V7H2.5a.5.5 0 000 1H7v4.5a.5.5 0 001 0V8h4.5a.5.5 0 000-1H8V2.5z"></path></svg></div></div></span></button></div><div style="position: relative;"><button id="pagefit" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Fit to width (Ctrl+\)"><span class="c0180"><div class="c0168"><div class="c0169"><svg id="fit-to-width-icon" width="21" height="20" viewBox="0 0 21 20" class=""><path d="M7.38 7.92a.5.5 0 01-.04.7l-1 .88H9a.5.5 0 010 1H6.34l1 .87a.5.5 0 11-.66.76l-2-1.75a.5.5 0 010-.76l2-1.75a.5.5 0 01.7.05z"></path><path d="M14.68 10.5l-1 .87a.5.5 0 00.66.76l2-1.75a.5.5 0 000-.76l-2-1.75a.5.5 0 00-.66.76l1 .87H12a.5.5 0 000 1h2.67z"></path><path d="M2.5 6c0-1.1.9-2 2-2h12a2 2 0 012 2v8a2 2 0 01-2 2h-12a2 2 0 01-2-2V6zm2-1a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V6a1 1 0 00-1-1h-12z"></path></svg></div></div></span></button></div><div class="c0143"></div></div></div><div id="pageselector-component-container" class="c01137 c01138"><input data-element-focusable="true" id="pageselector" class="c01141 c01139" type="text" value="1" title="Go to any page between 1 and 1. (Ctrl+Alt+G)" aria-label="Page number"><p class="c01143 c01151 c01140" id="pagelength" aria-hidden="true" title="Number of pages">of 1</p></div><div class="c0139"><div class="c0143"></div><div class="c0137"><div style="position: relative;"><button id="rotate" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Rotate (Ctrl+])"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20" class=""><path d="M3 10a7 7 0 1110 6.33V14.5a.5.5 0 00-1 0v3c0 .28.22.5.5.5h3a.5.5 0 000-1h-1.62A8 8 0 102 10a.5.5 0 001 0z"></path><path d="M10 12a2 2 0 100-4 2 2 0 000 4zm0-1a1 1 0 110-2 1 1 0 010 2z"></path></svg></div></div></span></button></div></div><div class="c0143"></div><div class="c0137"><div style="position: relative;"><button id="layouts" aria-expanded="false" aria-controls="layouts-flyout" class="c0174 c0189 c0181 c0179 c0188 c0163 c0166" data-element-focusable="false" disabled="" title="Page view"><span class="c0180"><div class="c0168"><div class="c0169"><svg id="page-layout-icon" class="c0153" width="16" height="12" viewBox="0 0 16 12" xmlns="https://www.w3.org/2000/svg"><path d="M1 2C1 1.44772 1.44772 1 2 1H2.5C2.77614 1 3 0.776142 3 0.5C3 0.223858 2.77614 0 2.5 0H2C0.895431 0 0 0.895431 0 2V2.5C0 2.77614 0.223858 3 0.5 3C0.776142 3 1 2.77614 1 2.5V2Z"></path><path d="M7.5 0.00012207C7.2239 0.00012207 7.00007 0.223914 7 0.5L7 11.5C7 11.7761 7.22386 12.0001 7.5 12.0001H14C15.1046 12.0001 16 11.1047 16 10.0001V5.41434C16 5.01651 15.842 4.63498 15.5607 4.35368L11.6464 0.439462C11.3651 0.158157 10.9836 0.00012207 10.5858 0.00012207H7.5ZM8 11.0001L8 1.00012L10 1.00012V4.50012C10 5.32855 10.6716 6.00012 11.5 6.00012H15V10.0001C15 10.5524 14.5523 11.0001 14 11.0001H8ZM11.5 5.00012C11.2239 5.00012 11 4.77626 11 4.50012V1.20723L14.7929 5.00012H11.5Z"></path><path d="M1 10C1 10.5523 1.44772 11 2 11H2.5C2.77614 11 3 11.2239 3 11.5C3 11.7761 2.77614 12 2.5 12H2C0.895431 12 0 11.1046 0 10V9.5C0 9.22386 0.223858 9 0.5 9C0.776143 9 1 9.22386 1 9.5V10Z"></path><path d="M1 4.5C1 4.22386 0.776142 4 0.5 4C0.223858 4 0 4.22386 0 4.5V7.5C0 7.77614 0.223858 8 0.5 8C0.776142 8 1 7.77614 1 7.5L1 4.5Z"></path><path d="M4 0.5C4 0.223858 4.22386 0 4.5 0H5.5C5.77614 0 6 0.223858 6 0.5C6 0.776142 5.77614 1 5.5 1H4.5C4.22386 1 4 0.776142 4 0.5Z"></path><path d="M4.5 11C4.22386 11 4 11.2239 4 11.5C4 11.7761 4.22386 12 4.5 12H5.5C5.77614 12 6 11.7761 6 11.5C6 11.2239 5.77614 11 5.5 11H4.5Z"></path></svg></div></div></span></button></div></div></div></div></div></div><div class="c0159 c0162"><div style="visibility: visible;"><div class="c0137"><div><div style="position: relative;"><button id="find" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Find (Ctrl + F)"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20" class=""><path d="M8.5 3a5.5 5.5 0 014.23 9.02l4.12 4.13a.5.5 0 01-.63.76l-.07-.06-4.13-4.12A5.5 5.5 0 118.5 3zm0 1a4.5 4.5 0 100 9 4.5 4.5 0 000-9z" fill-rule="nonzero"></path></svg></div></div></span></button></div></div><div class="c0141"><div class="c0143"></div><div class="c0137"><div style="position: relative;"><button id="print" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Print (Ctrl+P)"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20" class=""><path d="M5 4.5C5 3.67 5.67 3 6.5 3h7c.83 0 1.5.67 1.5 1.5V5h.5A2.5 2.5 0 0118 7.5v5c0 .83-.67 1.5-1.5 1.5H15v1.5c0 .83-.67 1.5-1.5 1.5h-7A1.5 1.5 0 015 15.5V14H3.5A1.5 1.5 0 012 12.5v-5A2.5 2.5 0 014.5 5H5v-.5zM6 5h8v-.5a.5.5 0 00-.5-.5h-7a.5.5 0 00-.5.5V5zm-1 8v-1.5c0-.83.67-1.5 1.5-1.5h7c.83 0 1.5.67 1.5 1.5V13h1.5a.5.5 0 00.5-.5v-5c0-.83-.67-1.5-1.5-1.5h-11C3.67 6 3 6.67 3 7.5v5c0 .28.22.5.5.5H5zm1.5-2a.5.5 0 00-.5.5v4c0 .28.22.5.5.5h7a.5.5 0 00.5-.5v-4a.5.5 0 00-.5-.5h-7z" fill-rule="nonzero"></path></svg></div></div></span></button></div><div style="position: relative;"><button id="save" class="c0174 c0189 c0181 c0179 c0188 c0163 c0166" data-element-focusable="false" disabled="" title="Save (Ctrl+S)"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20" class=""><path d="M3 5c0-1.1.9-2 2-2h8.38a2 2 0 011.41.59l1.62 1.62A2 2 0 0117 6.62V15a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm2-1a1 1 0 00-1 1v10a1 1 0 001 1v-4.5c0-.83.67-1.5 1.5-1.5h7c.83 0 1.5.67 1.5 1.5V16a1 1 0 001-1V6.62a1 1 0 00-.3-.7L14.1 4.28a1 1 0 00-.71-.29H13v2.5c0 .83-.67 1.5-1.5 1.5h-4A1.5 1.5 0 016 6.5V4H5zm2 0v2.5c0 .28.22.5.5.5h4a.5.5 0 00.5-.5V4H7zm7 12v-4.5a.5.5 0 00-.5-.5h-7a.5.5 0 00-.5.5V16h8z"></path></svg></div></div></span></button></div><div style="position: relative;"><button id="saveAs" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Save as"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20" class=""><path d="M5 3a2 2 0 00-2 2v10c0 1.1.9 2 2 2h3l.06-.35.16-.65H6v-4.5c0-.28.22-.5.5-.5h5.44l1-1H6.5c-.83 0-1.5.67-1.5 1.5V16a1 1 0 01-1-1V5a1 1 0 011-1h1v2.5C6 7.33 6.67 8 7.5 8h4c.83 0 1.5-.67 1.5-1.5V4h.38a1 1 0 01.7.3l1.63 1.61a1 1 0 01.29.71V8c.34-.01.68.03 1 .13v-1.5a2 2 0 00-.59-1.42L14.8 3.59A2 2 0 0013.38 3H5zm2 3.5V4h5v2.5a.5.5 0 01-.5.5h-4a.5.5 0 01-.5-.5z"></path><path d="M14.8 9.55l-4.82 4.83a2.2 2.2 0 00-.58 1.02l-.37 1.5a.89.89 0 001.08 1.07l1.5-.37c.38-.1.73-.3 1.01-.58l4.83-4.83a1.87 1.87 0 00-2.64-2.64z"></path></svg></div></div></span></button></div></div></div><div class="c0137"><div class="c0143"></div><div style="position: relative;"><button id="full-screen" class="c0174 c0189 c0179 c0188 c0163 c0166" data-element-focusable="true" title="Enter PDF full screen"><span class="c0180"><div class="c0168"><div class="c0169"><svg width="20" height="20" viewBox="0 0 20 20" class=""><path d="M10.5 3h6.04l.09.02.06.02.08.04.05.04.06.06.03.04.04.07.03.08.02.08V9.5a.5.5 0 01-1 .09V4.7L4.7 16h4.8a.5.5 0 01.5.41v.09a.5.5 0 01-.41.5H3.41l-.1-.04-.08-.04-.05-.04-.06-.06-.03-.04-.04-.07-.03-.08v-.03a.5.5 0 01-.02-.1v.07-6.07a.5.5 0 011-.09v4.89L15.3 4h-4.8a.5.5 0 01-.5-.41V3.5c0-.28.22-.5.5-.5z" fill-rule="nonzero"></path></svg></div></div></span></button></div><button id="settings" data-element-focusable="true" aria-haspopup="true" aria-expanded="false" class="c01161" title="Settings and more" style="width: 36px;"><span class="c01153"><span aria-hidden="true"><svg width="20" height="20" viewBox="0 0 20 20" class=""><path d="M1.91 7.38A8.5 8.5 0 013.7 4.3a.5.5 0 01.54-.13l1.92.68a1 1 0 001.32-.76l.36-2a.5.5 0 01.4-.4 8.53 8.53 0 013.55 0c.2.04.35.2.38.4l.37 2a1 1 0 001.32.76l1.92-.68a.5.5 0 01.54.13 8.5 8.5 0 011.78 3.08c.06.2 0 .4-.15.54l-1.56 1.32a1 1 0 000 1.52l1.56 1.32a.5.5 0 01.15.54 8.5 8.5 0 01-1.78 3.08.5.5 0 01-.54.13l-1.92-.68a1 1 0 00-1.32.76l-.37 2a.5.5 0 01-.38.4 8.53 8.53 0 01-3.56 0 .5.5 0 01-.39-.4l-.36-2a1 1 0 00-1.32-.76l-1.92.68a.5.5 0 01-.54-.13 8.5 8.5 0 01-1.78-3.08.5.5 0 01.15-.54l1.56-1.32a1 1 0 000-1.52L2.06 7.92a.5.5 0 01-.15-.54zm1.06 0l1.3 1.1a2 2 0 010 3.04l-1.3 1.1c.3.79.71 1.51 1.25 2.16l1.6-.58a2 2 0 012.63 1.53l.3 1.67a7.55 7.55 0 002.5 0l.3-1.67a2 2 0 012.64-1.53l1.6.58a7.5 7.5 0 001.24-2.16l-1.3-1.1a2 2 0 010-3.04l1.3-1.1a7.5 7.5 0 00-1.25-2.16l-1.6.58a2 2 0 01-2.63-1.53l-.3-1.67a7.55 7.55 0 00-2.5 0l-.3 1.67A2 2 0 015.81 5.8l-1.6-.58a7.5 7.5 0 00-1.24 2.16zM7.5 10a2.5 2.5 0 115 0 2.5 2.5 0 01-5 0zm1 0a1.5 1.5 0 103 0 1.5 1.5 0 00-3 0z" fill-rule="nonzero"></path></svg></span></span></button></div></div></div></div></div></div></div></div><div class="c01165 c01167" id="infobar-list" style="top: 41px;"></div><div id="page-indicator" class="c01171" style="opacity: 0; top: 0px;"><div id="page-indicator-page-num" class="c01169">1</div><div id="page-indicator-triangle" class="c01170"></div></div></div><div class="announcement" style="top: 0px; position: fixed; opacity: 0;"><div role="status"></div><div role="alert"></div></div></div>

  <!-- This is container div for the currently open modal if exists -->
  <div id="modal-root"><div id="reading_bar_modal"></div></div>

  <div id="sizer"></div>

  <div id="layout-container" style="opacity: 1; display: block; width: 803px; height: 1132px; top: 45px; transform: scale(2.15287) translate(27.8698px, 0px);"><div id="pagediv_0" class="pagerect" style="left: 5px; top: 3px; width: 793px; height: 1122px; --shadow-clip-rect: -3px -5px -7px -5px;"></div></div><div id="document-container">
    <div id="embed-border"></div>
  <embed id="plugin" type="application/x-google-chrome-pdf" original-url="file:///C:/Users/Jawad%20Charles/Downloads/license.pdf" src="chrome-extension://mhjfbmdgcfjbbpaeojofohoefgiehjai/1562d723-9959-4899-abd8-a92708e98a9d" background-color="0xFF333333" first-page-separator="4" style="position: relative !important; top: 41px; min-height: calc(100% - 41px);" javascript="allow" stream_timestamp="68334556206" embed-top-offset="41" width="1729" height="2441" full-frame="" pdfviewrecoveryenabled="" pdffreetextenabled="" data-docheight="1132" data-docwidth="803"></div>




<script src="edge://resources/js/load_time_data_deprecated.js"></script>
<!-- Defining JobRunner construct. -->
<script src="helpers/job_runner.js"></script>
<!-- Initialize job runners and initialize loadtimedata. -->
<script src="./setup_job_runners.js"></script>
<!-- The generated bundles from webpack. -->
<script src="dist/lib_fast_deprecated.chunk.js"></script>
<script src="dist/lib_fast_web_components.chunk.js"></script>
<script src="dist/lib_react.chunk.js"></script>
<script src="dist/pdfui_component.chunk.js"></script>
<script src="dist/pdf.bundle.js"></script>

<script src="../main.js" type="module"></script>

</body><!-- <script src="edge://resources/js/cr/event_target.js"></script> --><!-- Defining loadtimedata interface. --></html><?php /**PATH C:\Users\Jawad Charles\Desktop\Assing\lisabrela\resources\views/applicant/leseni.blade.php ENDPATH**/ ?>