<?php

namespace LupeCode\phpTraderNative;


class CoreAnnotated extends Core
{
//
//public int acosLookback(
//) {
//    return super.acosLookback(
//); }
//
//@FuncInfo(
//        name  = "ACOS",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode acos(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.acos (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int adLookback(
//) {
//    return super.adLookback(
//); }
//
//@FuncInfo(
//        name  = "AD",
//        group = "Volume Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode ad(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLCV",
//                flags     = 30,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            double inVolume [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.ad (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        inVolume ,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int addLookback(
//) {
//    return super.addLookback(
//); }
//
//@FuncInfo(
//        name  = "ADD",
//        group = "Math Operators",
//        flags = 0,
//        nbInput    = 2,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode add(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal0",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal0[],
//            @InputParameterInfo(
//                paramName = "inReal1",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal1[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.add (
//        startIdx,
//        endIdx,
//        inReal0,
//        inReal1,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int adOscLookback(
//        int optInFastPeriod,
//        int optInSlowPeriod) {
//    return super.adOscLookback(
//        optInFastPeriod,
//        optInSlowPeriod); }
//
//@FuncInfo(
//        name  = "ADOSC",
//        group = "Volume Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 2,
//        nbOutput   = 1
//)
//public RetCode adOsc(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLCV",
//                flags     = 30,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            double inVolume [],
//            @OptInputParameterInfo(
//                paramName    = "optInFastPeriod",
//                displayName  = "Fast Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastPeriod",
//                    defaultValue = 3,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowPeriod",
//                displayName  = "Slow Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSlowPeriod",
//                    defaultValue = 10,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSlowPeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.adOsc (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        inVolume ,
//        optInFastPeriod,
//        optInSlowPeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int adxLookback(
//        int optInTimePeriod) {
//    return super.adxLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "ADX",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode adx(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.adx (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int adxrLookback(
//        int optInTimePeriod) {
//    return super.adxrLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "ADXR",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode adxr(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.adxr (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int apoLookback(
//        int optInFastPeriod,
//        int optInSlowPeriod,
//        MAType optInMAType) {
//    return super.apoLookback(
//        optInFastPeriod,
//        optInSlowPeriod,
//        optInMAType); }
//
//@FuncInfo(
//        name  = "APO",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 3,
//        nbOutput   = 1
//)
//public RetCode apo(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInFastPeriod",
//                displayName  = "Fast Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastPeriod",
//                    defaultValue = 12,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowPeriod",
//                displayName  = "Slow Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSlowPeriod",
//                    defaultValue = 26,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSlowPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInMAType",
//                displayName  = "MA Type",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInMAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInMAType,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.apo (
//        startIdx,
//        endIdx,
//        inReal,
//        optInFastPeriod,
//        optInSlowPeriod,
//        optInMAType,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int aroonLookback(
//        int optInTimePeriod) {
//    return super.aroonLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "AROON",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 2
//)
//public RetCode aroon(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHL",
//                flags     = 6,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outAroonDown",
//                flags     = 4,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outAroonDown[],
//            @OutputParameterInfo(
//                paramName = "outAroonUp",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outAroonUp[]
//) {
//    return super.aroon (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outAroonDown,
//        outAroonUp
//); }
//
//
//public int aroonOscLookback(
//        int optInTimePeriod) {
//    return super.aroonOscLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "AROONOSC",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode aroonOsc(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHL",
//                flags     = 6,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.aroonOsc (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int asinLookback(
//) {
//    return super.asinLookback(
//); }
//
//@FuncInfo(
//        name  = "ASIN",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode asin(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.asin (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int atanLookback(
//) {
//    return super.atanLookback(
//); }
//
//@FuncInfo(
//        name  = "ATAN",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode atan(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.atan (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int atrLookback(
//        int optInTimePeriod) {
//    return super.atrLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "ATR",
//        group = "Volatility Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode atr(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.atr (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int avgPriceLookback(
//) {
//    return super.avgPriceLookback(
//); }
//
//@FuncInfo(
//        name  = "AVGPRICE",
//        group = "Price Transform",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode avgPrice(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.avgPrice (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int bbandsLookback(
//        int optInTimePeriod,
//        double optInNbDevUp,
//        double optInNbDevDn,
//        MAType optInMAType) {
//    return super.bbandsLookback(
//        optInTimePeriod,
//        optInNbDevUp,
//        optInNbDevDn,
//        optInMAType); }
//
//@FuncInfo(
//        name  = "BBANDS",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 4,
//        nbOutput   = 3
//)
//public RetCode bbands(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 5,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInNbDevUp",
//                displayName  = "Deviations up",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInNbDevUp",
//                    defaultValue = 2.00000,
//                    min          = -30000000000000002000000000000000000000.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 2,
//                    suggested_start     = -2.00000,
//                    suggested_end       = 2.00000,
//                    suggested_increment = 0.20000
//            )
//            double optInNbDevUp,
//            @OptInputParameterInfo(
//                paramName    = "optInNbDevDn",
//                displayName  = "Deviations down",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInNbDevDn",
//                    defaultValue = 2.00000,
//                    min          = -30000000000000002000000000000000000000.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 2,
//                    suggested_start     = -2.00000,
//                    suggested_end       = 2.00000,
//                    suggested_increment = 0.20000
//            )
//            double optInNbDevDn,
//            @OptInputParameterInfo(
//                paramName    = "optInMAType",
//                displayName  = "MA Type",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInMAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInMAType,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outRealUpperBand",
//                flags     = 2048,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outRealUpperBand[],
//            @OutputParameterInfo(
//                paramName = "outRealMiddleBand",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outRealMiddleBand[],
//            @OutputParameterInfo(
//                paramName = "outRealLowerBand",
//                flags     = 4096,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outRealLowerBand[]
//) {
//    return super.bbands (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        optInNbDevUp,
//        optInNbDevDn,
//        optInMAType,
//        outBegIdx,
//        outNBElement,
//        outRealUpperBand,
//        outRealMiddleBand,
//        outRealLowerBand
//); }
//
//
//public int betaLookback(
//        int optInTimePeriod) {
//    return super.betaLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "BETA",
//        group = "Statistic Functions",
//        flags = 0,
//        nbInput    = 2,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode beta(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal0",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal0[],
//            @InputParameterInfo(
//                paramName = "inReal1",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal1[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 5,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.beta (
//        startIdx,
//        endIdx,
//        inReal0,
//        inReal1,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int bopLookback(
//) {
//    return super.bopLookback(
//); }
//
//@FuncInfo(
//        name  = "BOP",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode bop(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.bop (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int cciLookback(
//        int optInTimePeriod) {
//    return super.cciLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "CCI",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode cci(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.cci (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int cdl2CrowsLookback(
//) {
//    return super.cdl2CrowsLookback(
//); }
//
//@FuncInfo(
//        name  = "CDL2CROWS",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdl2Crows(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdl2Crows (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdl3BlackCrowsLookback(
//) {
//    return super.cdl3BlackCrowsLookback(
//); }
//
//@FuncInfo(
//        name  = "CDL3BLACKCROWS",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdl3BlackCrows(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdl3BlackCrows (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdl3InsideLookback(
//) {
//    return super.cdl3InsideLookback(
//); }
//
//@FuncInfo(
//        name  = "CDL3INSIDE",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdl3Inside(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdl3Inside (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdl3LineStrikeLookback(
//) {
//    return super.cdl3LineStrikeLookback(
//); }
//
//@FuncInfo(
//        name  = "CDL3LINESTRIKE",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdl3LineStrike(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdl3LineStrike (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdl3OutsideLookback(
//) {
//    return super.cdl3OutsideLookback(
//); }
//
//@FuncInfo(
//        name  = "CDL3OUTSIDE",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdl3Outside(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdl3Outside (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdl3StarsInSouthLookback(
//) {
//    return super.cdl3StarsInSouthLookback(
//); }
//
//@FuncInfo(
//        name  = "CDL3STARSINSOUTH",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdl3StarsInSouth(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdl3StarsInSouth (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdl3WhiteSoldiersLookback(
//) {
//    return super.cdl3WhiteSoldiersLookback(
//); }
//
//@FuncInfo(
//        name  = "CDL3WHITESOLDIERS",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdl3WhiteSoldiers(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdl3WhiteSoldiers (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlAbandonedBabyLookback(
//        double optInPenetration) {
//    return super.cdlAbandonedBabyLookback(
//        optInPenetration); }
//
//@FuncInfo(
//        name  = "CDLABANDONEDBABY",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode cdlAbandonedBaby(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInPenetration",
//                displayName  = "Penetration",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInPenetration",
//                    defaultValue = 0.30000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 0,
//                    suggested_start     = 0.00000,
//                    suggested_end       = 0.00000,
//                    suggested_increment = 0.00000
//            )
//            double optInPenetration,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlAbandonedBaby (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInPenetration,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlAdvanceBlockLookback(
//) {
//    return super.cdlAdvanceBlockLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLADVANCEBLOCK",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlAdvanceBlock(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlAdvanceBlock (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlBeltHoldLookback(
//) {
//    return super.cdlBeltHoldLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLBELTHOLD",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlBeltHold(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlBeltHold (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlBreakawayLookback(
//) {
//    return super.cdlBreakawayLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLBREAKAWAY",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlBreakaway(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlBreakaway (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlClosingMarubozuLookback(
//) {
//    return super.cdlClosingMarubozuLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLCLOSINGMARUBOZU",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlClosingMarubozu(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlClosingMarubozu (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlConcealBabysWallLookback(
//) {
//    return super.cdlConcealBabysWallLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLCONCEALBABYSWALL",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlConcealBabysWall(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlConcealBabysWall (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlCounterAttackLookback(
//) {
//    return super.cdlCounterAttackLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLCOUNTERATTACK",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlCounterAttack(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlCounterAttack (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlDarkCloudCoverLookback(
//        double optInPenetration) {
//    return super.cdlDarkCloudCoverLookback(
//        optInPenetration); }
//
//@FuncInfo(
//        name  = "CDLDARKCLOUDCOVER",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode cdlDarkCloudCover(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInPenetration",
//                displayName  = "Penetration",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInPenetration",
//                    defaultValue = 0.50000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 0,
//                    suggested_start     = 0.00000,
//                    suggested_end       = 0.00000,
//                    suggested_increment = 0.00000
//            )
//            double optInPenetration,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlDarkCloudCover (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInPenetration,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlDojiLookback(
//) {
//    return super.cdlDojiLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLDOJI",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlDoji(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlDoji (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlDojiStarLookback(
//) {
//    return super.cdlDojiStarLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLDOJISTAR",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlDojiStar(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlDojiStar (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlDragonflyDojiLookback(
//) {
//    return super.cdlDragonflyDojiLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLDRAGONFLYDOJI",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlDragonflyDoji(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlDragonflyDoji (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlEngulfingLookback(
//) {
//    return super.cdlEngulfingLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLENGULFING",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlEngulfing(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlEngulfing (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlEveningDojiStarLookback(
//        double optInPenetration) {
//    return super.cdlEveningDojiStarLookback(
//        optInPenetration); }
//
//@FuncInfo(
//        name  = "CDLEVENINGDOJISTAR",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode cdlEveningDojiStar(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInPenetration",
//                displayName  = "Penetration",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInPenetration",
//                    defaultValue = 0.30000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 0,
//                    suggested_start     = 0.00000,
//                    suggested_end       = 0.00000,
//                    suggested_increment = 0.00000
//            )
//            double optInPenetration,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlEveningDojiStar (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInPenetration,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlEveningStarLookback(
//        double optInPenetration) {
//    return super.cdlEveningStarLookback(
//        optInPenetration); }
//
//@FuncInfo(
//        name  = "CDLEVENINGSTAR",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode cdlEveningStar(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInPenetration",
//                displayName  = "Penetration",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInPenetration",
//                    defaultValue = 0.30000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 0,
//                    suggested_start     = 0.00000,
//                    suggested_end       = 0.00000,
//                    suggested_increment = 0.00000
//            )
//            double optInPenetration,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlEveningStar (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInPenetration,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlGapSideSideWhiteLookback(
//) {
//    return super.cdlGapSideSideWhiteLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLGAPSIDESIDEWHITE",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlGapSideSideWhite(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlGapSideSideWhite (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlGravestoneDojiLookback(
//) {
//    return super.cdlGravestoneDojiLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLGRAVESTONEDOJI",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlGravestoneDoji(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlGravestoneDoji (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlHammerLookback(
//) {
//    return super.cdlHammerLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLHAMMER",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlHammer(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlHammer (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlHangingManLookback(
//) {
//    return super.cdlHangingManLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLHANGINGMAN",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlHangingMan(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlHangingMan (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlHaramiLookback(
//) {
//    return super.cdlHaramiLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLHARAMI",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlHarami(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlHarami (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlHaramiCrossLookback(
//) {
//    return super.cdlHaramiCrossLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLHARAMICROSS",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlHaramiCross(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlHaramiCross (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlHignWaveLookback(
//) {
//    return super.cdlHignWaveLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLHIGHWAVE",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlHignWave(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlHignWave (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlHikkakeLookback(
//) {
//    return super.cdlHikkakeLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLHIKKAKE",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlHikkake(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlHikkake (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlHikkakeModLookback(
//) {
//    return super.cdlHikkakeModLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLHIKKAKEMOD",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlHikkakeMod(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlHikkakeMod (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlHomingPigeonLookback(
//) {
//    return super.cdlHomingPigeonLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLHOMINGPIGEON",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlHomingPigeon(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlHomingPigeon (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlIdentical3CrowsLookback(
//) {
//    return super.cdlIdentical3CrowsLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLIDENTICAL3CROWS",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlIdentical3Crows(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlIdentical3Crows (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlInNeckLookback(
//) {
//    return super.cdlInNeckLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLINNECK",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlInNeck(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlInNeck (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlInvertedHammerLookback(
//) {
//    return super.cdlInvertedHammerLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLINVERTEDHAMMER",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlInvertedHammer(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlInvertedHammer (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlKickingLookback(
//) {
//    return super.cdlKickingLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLKICKING",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlKicking(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlKicking (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlKickingByLengthLookback(
//) {
//    return super.cdlKickingByLengthLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLKICKINGBYLENGTH",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlKickingByLength(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlKickingByLength (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlLadderBottomLookback(
//) {
//    return super.cdlLadderBottomLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLLADDERBOTTOM",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlLadderBottom(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlLadderBottom (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlLongLeggedDojiLookback(
//) {
//    return super.cdlLongLeggedDojiLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLLONGLEGGEDDOJI",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlLongLeggedDoji(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlLongLeggedDoji (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlLongLineLookback(
//) {
//    return super.cdlLongLineLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLLONGLINE",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlLongLine(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlLongLine (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlMarubozuLookback(
//) {
//    return super.cdlMarubozuLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLMARUBOZU",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlMarubozu(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlMarubozu (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlMatchingLowLookback(
//) {
//    return super.cdlMatchingLowLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLMATCHINGLOW",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlMatchingLow(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlMatchingLow (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlMatHoldLookback(
//        double optInPenetration) {
//    return super.cdlMatHoldLookback(
//        optInPenetration); }
//
//@FuncInfo(
//        name  = "CDLMATHOLD",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode cdlMatHold(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInPenetration",
//                displayName  = "Penetration",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInPenetration",
//                    defaultValue = 0.50000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 0,
//                    suggested_start     = 0.00000,
//                    suggested_end       = 0.00000,
//                    suggested_increment = 0.00000
//            )
//            double optInPenetration,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlMatHold (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInPenetration,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlMorningDojiStarLookback(
//        double optInPenetration) {
//    return super.cdlMorningDojiStarLookback(
//        optInPenetration); }
//
//@FuncInfo(
//        name  = "CDLMORNINGDOJISTAR",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode cdlMorningDojiStar(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInPenetration",
//                displayName  = "Penetration",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInPenetration",
//                    defaultValue = 0.30000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 0,
//                    suggested_start     = 0.00000,
//                    suggested_end       = 0.00000,
//                    suggested_increment = 0.00000
//            )
//            double optInPenetration,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlMorningDojiStar (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInPenetration,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlMorningStarLookback(
//        double optInPenetration) {
//    return super.cdlMorningStarLookback(
//        optInPenetration); }
//
//@FuncInfo(
//        name  = "CDLMORNINGSTAR",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode cdlMorningStar(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInPenetration",
//                displayName  = "Penetration",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInPenetration",
//                    defaultValue = 0.30000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 0,
//                    suggested_start     = 0.00000,
//                    suggested_end       = 0.00000,
//                    suggested_increment = 0.00000
//            )
//            double optInPenetration,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlMorningStar (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInPenetration,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlOnNeckLookback(
//) {
//    return super.cdlOnNeckLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLONNECK",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlOnNeck(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlOnNeck (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlPiercingLookback(
//) {
//    return super.cdlPiercingLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLPIERCING",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlPiercing(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlPiercing (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlRickshawManLookback(
//) {
//    return super.cdlRickshawManLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLRICKSHAWMAN",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlRickshawMan(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlRickshawMan (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlRiseFall3MethodsLookback(
//) {
//    return super.cdlRiseFall3MethodsLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLRISEFALL3METHODS",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlRiseFall3Methods(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlRiseFall3Methods (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlSeperatingLinesLookback(
//) {
//    return super.cdlSeperatingLinesLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLSEPARATINGLINES",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlSeperatingLines(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlSeperatingLines (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlShootingStarLookback(
//) {
//    return super.cdlShootingStarLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLSHOOTINGSTAR",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlShootingStar(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlShootingStar (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlShortLineLookback(
//) {
//    return super.cdlShortLineLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLSHORTLINE",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlShortLine(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlShortLine (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlSpinningTopLookback(
//) {
//    return super.cdlSpinningTopLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLSPINNINGTOP",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlSpinningTop(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlSpinningTop (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlStalledPatternLookback(
//) {
//    return super.cdlStalledPatternLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLSTALLEDPATTERN",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlStalledPattern(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlStalledPattern (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlStickSandwhichLookback(
//) {
//    return super.cdlStickSandwhichLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLSTICKSANDWICH",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlStickSandwhich(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlStickSandwhich (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlTakuriLookback(
//) {
//    return super.cdlTakuriLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLTAKURI",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlTakuri(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlTakuri (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlTasukiGapLookback(
//) {
//    return super.cdlTasukiGapLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLTASUKIGAP",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlTasukiGap(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlTasukiGap (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlThrustingLookback(
//) {
//    return super.cdlThrustingLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLTHRUSTING",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlThrusting(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlThrusting (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlTristarLookback(
//) {
//    return super.cdlTristarLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLTRISTAR",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlTristar(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlTristar (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlUnique3RiverLookback(
//) {
//    return super.cdlUnique3RiverLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLUNIQUE3RIVER",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlUnique3River(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlUnique3River (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlUpsideGap2CrowsLookback(
//) {
//    return super.cdlUpsideGap2CrowsLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLUPSIDEGAP2CROWS",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlUpsideGap2Crows(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlUpsideGap2Crows (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int cdlXSideGap3MethodsLookback(
//) {
//    return super.cdlXSideGap3MethodsLookback(
//); }
//
//@FuncInfo(
//        name  = "CDLXSIDEGAP3METHODS",
//        group = "Pattern Recognition",
//        flags = 268435456,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cdlXSideGap3Methods(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceOHLC",
//                flags     = 15,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inOpen [],
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.cdlXSideGap3Methods (
//        startIdx,
//        endIdx,
//        inOpen ,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int ceilLookback(
//) {
//    return super.ceilLookback(
//); }
//
//@FuncInfo(
//        name  = "CEIL",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode ceil(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.ceil (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int cmoLookback(
//        int optInTimePeriod) {
//    return super.cmoLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "CMO",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode cmo(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.cmo (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int correlLookback(
//        int optInTimePeriod) {
//    return super.correlLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "CORREL",
//        group = "Statistic Functions",
//        flags = 0,
//        nbInput    = 2,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode correl(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal0",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal0[],
//            @InputParameterInfo(
//                paramName = "inReal1",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal1[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.correl (
//        startIdx,
//        endIdx,
//        inReal0,
//        inReal1,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int cosLookback(
//) {
//    return super.cosLookback(
//); }
//
//@FuncInfo(
//        name  = "COS",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cos(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.cos (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int coshLookback(
//) {
//    return super.coshLookback(
//); }
//
//@FuncInfo(
//        name  = "COSH",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode cosh(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.cosh (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int demaLookback(
//        int optInTimePeriod) {
//    return super.demaLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "DEMA",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode dema(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.dema (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int divLookback(
//) {
//    return super.divLookback(
//); }
//
//@FuncInfo(
//        name  = "DIV",
//        group = "Math Operators",
//        flags = 0,
//        nbInput    = 2,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode div(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal0",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal0[],
//            @InputParameterInfo(
//                paramName = "inReal1",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal1[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.div (
//        startIdx,
//        endIdx,
//        inReal0,
//        inReal1,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int dxLookback(
//        int optInTimePeriod) {
//    return super.dxLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "DX",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode dx(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.dx (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int emaLookback(
//        int optInTimePeriod) {
//    return super.emaLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "EMA",
//        group = "Overlap Studies",
//        flags = 150994944,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode ema(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.ema (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int expLookback(
//) {
//    return super.expLookback(
//); }
//
//@FuncInfo(
//        name  = "EXP",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode exp(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.exp (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int floorLookback(
//) {
//    return super.floorLookback(
//); }
//
//@FuncInfo(
//        name  = "FLOOR",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode floor(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.floor (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int htDcPeriodLookback(
//) {
//    return super.htDcPeriodLookback(
//); }
//
//@FuncInfo(
//        name  = "HT_DCPERIOD",
//        group = "Cycle Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode htDcPeriod(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.htDcPeriod (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int htDcPhaseLookback(
//) {
//    return super.htDcPhaseLookback(
//); }
//
//@FuncInfo(
//        name  = "HT_DCPHASE",
//        group = "Cycle Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode htDcPhase(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.htDcPhase (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int htPhasorLookback(
//) {
//    return super.htPhasorLookback(
//); }
//
//@FuncInfo(
//        name  = "HT_PHASOR",
//        group = "Cycle Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 2
//)
//public RetCode htPhasor(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInPhase",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outInPhase[],
//            @OutputParameterInfo(
//                paramName = "outQuadrature",
//                flags     = 4,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outQuadrature[]
//) {
//    return super.htPhasor (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outInPhase,
//        outQuadrature
//); }
//
//
//public int htSineLookback(
//) {
//    return super.htSineLookback(
//); }
//
//@FuncInfo(
//        name  = "HT_SINE",
//        group = "Cycle Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 2
//)
//public RetCode htSine(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outSine",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outSine[],
//            @OutputParameterInfo(
//                paramName = "outLeadSine",
//                flags     = 4,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outLeadSine[]
//) {
//    return super.htSine (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outSine,
//        outLeadSine
//); }
//
//
//public int htTrendlineLookback(
//) {
//    return super.htTrendlineLookback(
//); }
//
//@FuncInfo(
//        name  = "HT_TRENDLINE",
//        group = "Overlap Studies",
//        flags = 150994944,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode htTrendline(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.htTrendline (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int htTrendModeLookback(
//) {
//    return super.htTrendModeLookback(
//); }
//
//@FuncInfo(
//        name  = "HT_TRENDMODE",
//        group = "Cycle Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode htTrendMode(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.htTrendMode (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int kamaLookback(
//        int optInTimePeriod) {
//    return super.kamaLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "KAMA",
//        group = "Overlap Studies",
//        flags = 150994944,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode kama(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.kama (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int linearRegLookback(
//        int optInTimePeriod) {
//    return super.linearRegLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "LINEARREG",
//        group = "Statistic Functions",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode linearReg(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.linearReg (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int linearRegAngleLookback(
//        int optInTimePeriod) {
//    return super.linearRegAngleLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "LINEARREG_ANGLE",
//        group = "Statistic Functions",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode linearRegAngle(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.linearRegAngle (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int linearRegInterceptLookback(
//        int optInTimePeriod) {
//    return super.linearRegInterceptLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "LINEARREG_INTERCEPT",
//        group = "Statistic Functions",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode linearRegIntercept(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.linearRegIntercept (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int linearRegSlopeLookback(
//        int optInTimePeriod) {
//    return super.linearRegSlopeLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "LINEARREG_SLOPE",
//        group = "Statistic Functions",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode linearRegSlope(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.linearRegSlope (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int lnLookback(
//) {
//    return super.lnLookback(
//); }
//
//@FuncInfo(
//        name  = "LN",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode ln(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.ln (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int log10Lookback(
//) {
//    return super.log10Lookback(
//); }
//
//@FuncInfo(
//        name  = "LOG10",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode log10(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.log10 (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int movingAverageLookback(
//        int optInTimePeriod,
//        MAType optInMAType) {
//    return super.movingAverageLookback(
//        optInTimePeriod,
//        optInMAType); }
//
//@FuncInfo(
//        name  = "MA",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 2,
//        nbOutput   = 1
//)
//public RetCode movingAverage(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInMAType",
//                displayName  = "MA Type",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInMAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInMAType,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.movingAverage (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        optInMAType,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int macdLookback(
//        int optInFastPeriod,
//        int optInSlowPeriod,
//        int optInSignalPeriod) {
//    return super.macdLookback(
//        optInFastPeriod,
//        optInSlowPeriod,
//        optInSignalPeriod); }
//
//@FuncInfo(
//        name  = "MACD",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 3,
//        nbOutput   = 3
//)
//public RetCode macd(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInFastPeriod",
//                displayName  = "Fast Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastPeriod",
//                    defaultValue = 12,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowPeriod",
//                displayName  = "Slow Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSlowPeriod",
//                    defaultValue = 26,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSlowPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInSignalPeriod",
//                displayName  = "Signal Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSignalPeriod",
//                    defaultValue = 9,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSignalPeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outMACD",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMACD[],
//            @OutputParameterInfo(
//                paramName = "outMACDSignal",
//                flags     = 4,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMACDSignal[],
//            @OutputParameterInfo(
//                paramName = "outMACDHist",
//                flags     = 16,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMACDHist[]
//) {
//    return super.macd (
//        startIdx,
//        endIdx,
//        inReal,
//        optInFastPeriod,
//        optInSlowPeriod,
//        optInSignalPeriod,
//        outBegIdx,
//        outNBElement,
//        outMACD,
//        outMACDSignal,
//        outMACDHist
//); }
//
//
//public int macdExtLookback(
//        int optInFastPeriod,
//        MAType optInFastMAType,
//        int optInSlowPeriod,
//        MAType optInSlowMAType,
//        int optInSignalPeriod,
//        MAType optInSignalMAType) {
//    return super.macdExtLookback(
//        optInFastPeriod,
//        optInFastMAType,
//        optInSlowPeriod,
//        optInSlowMAType,
//        optInSignalPeriod,
//        optInSignalMAType); }
//
//@FuncInfo(
//        name  = "MACDEXT",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 6,
//        nbOutput   = 3
//)
//public RetCode macdExt(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInFastPeriod",
//                displayName  = "Fast Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastPeriod",
//                    defaultValue = 12,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInFastMAType",
//                displayName  = "Fast MA",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInFastMAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInFastMAType,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowPeriod",
//                displayName  = "Slow Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSlowPeriod",
//                    defaultValue = 26,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSlowPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowMAType",
//                displayName  = "Slow MA",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInSlowMAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInSlowMAType,
//            @OptInputParameterInfo(
//                paramName    = "optInSignalPeriod",
//                displayName  = "Signal Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSignalPeriod",
//                    defaultValue = 9,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSignalPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInSignalMAType",
//                displayName  = "Signal MA",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInSignalMAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInSignalMAType,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outMACD",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMACD[],
//            @OutputParameterInfo(
//                paramName = "outMACDSignal",
//                flags     = 4,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMACDSignal[],
//            @OutputParameterInfo(
//                paramName = "outMACDHist",
//                flags     = 16,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMACDHist[]
//) {
//    return super.macdExt (
//        startIdx,
//        endIdx,
//        inReal,
//        optInFastPeriod,
//        optInFastMAType,
//        optInSlowPeriod,
//        optInSlowMAType,
//        optInSignalPeriod,
//        optInSignalMAType,
//        outBegIdx,
//        outNBElement,
//        outMACD,
//        outMACDSignal,
//        outMACDHist
//); }
//
//
//public int macdFixLookback(
//        int optInSignalPeriod) {
//    return super.macdFixLookback(
//        optInSignalPeriod); }
//
//@FuncInfo(
//        name  = "MACDFIX",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 3
//)
//public RetCode macdFix(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInSignalPeriod",
//                displayName  = "Signal Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSignalPeriod",
//                    defaultValue = 9,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSignalPeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outMACD",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMACD[],
//            @OutputParameterInfo(
//                paramName = "outMACDSignal",
//                flags     = 4,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMACDSignal[],
//            @OutputParameterInfo(
//                paramName = "outMACDHist",
//                flags     = 16,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMACDHist[]
//) {
//    return super.macdFix (
//        startIdx,
//        endIdx,
//        inReal,
//        optInSignalPeriod,
//        outBegIdx,
//        outNBElement,
//        outMACD,
//        outMACDSignal,
//        outMACDHist
//); }
//
//
//public int mamaLookback(
//        double optInFastLimit,
//        double optInSlowLimit) {
//    return super.mamaLookback(
//        optInFastLimit,
//        optInSlowLimit); }
//
//@FuncInfo(
//        name  = "MAMA",
//        group = "Overlap Studies",
//        flags = 150994944,
//        nbInput    = 1,
//        nbOptInput = 2,
//        nbOutput   = 2
//)
//public RetCode mama(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInFastLimit",
//                displayName  = "Fast Limit",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInFastLimit",
//                    defaultValue = 0.50000,
//                    min          = 0.01000,
//                    max          = 0.99000,
//                    precision    = 2,
//                    suggested_start     = 0.21000,
//                    suggested_end       = 0.80000,
//                    suggested_increment = 0.01000
//            )
//            double optInFastLimit,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowLimit",
//                displayName  = "Slow Limit",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInSlowLimit",
//                    defaultValue = 0.05000,
//                    min          = 0.01000,
//                    max          = 0.99000,
//                    precision    = 2,
//                    suggested_start     = 0.01000,
//                    suggested_end       = 0.60000,
//                    suggested_increment = 0.01000
//            )
//            double optInSlowLimit,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outMAMA",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMAMA[],
//            @OutputParameterInfo(
//                paramName = "outFAMA",
//                flags     = 4,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outFAMA[]
//) {
//    return super.mama (
//        startIdx,
//        endIdx,
//        inReal,
//        optInFastLimit,
//        optInSlowLimit,
//        outBegIdx,
//        outNBElement,
//        outMAMA,
//        outFAMA
//); }
//
//
//public int movingAverageVariablePeriodLookback(
//        int optInMinPeriod,
//        int optInMaxPeriod,
//        MAType optInMAType) {
//    return super.movingAverageVariablePeriodLookback(
//        optInMinPeriod,
//        optInMaxPeriod,
//        optInMAType); }
//
//@FuncInfo(
//        name  = "MAVP",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 2,
//        nbOptInput = 3,
//        nbOutput   = 1
//)
//public RetCode movingAverageVariablePeriod(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @InputParameterInfo(
//                paramName = "inPeriods",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inPeriods[],
//            @OptInputParameterInfo(
//                paramName    = "optInMinPeriod",
//                displayName  = "Minimum Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInMinPeriod",
//                    defaultValue = 2,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInMinPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInMaxPeriod",
//                displayName  = "Maximum Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInMaxPeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInMaxPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInMAType",
//                displayName  = "MA Type",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInMAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInMAType,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.movingAverageVariablePeriod (
//        startIdx,
//        endIdx,
//        inReal,
//        inPeriods,
//        optInMinPeriod,
//        optInMaxPeriod,
//        optInMAType,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int maxLookback(
//        int optInTimePeriod) {
//    return super.maxLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MAX",
//        group = "Math Operators",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode max(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.max (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int maxIndexLookback(
//        int optInTimePeriod) {
//    return super.maxIndexLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MAXINDEX",
//        group = "Math Operators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode maxIndex(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.maxIndex (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int medPriceLookback(
//) {
//    return super.medPriceLookback(
//); }
//
//@FuncInfo(
//        name  = "MEDPRICE",
//        group = "Price Transform",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode medPrice(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHL",
//                flags     = 6,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.medPrice (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int mfiLookback(
//        int optInTimePeriod) {
//    return super.mfiLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MFI",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode mfi(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLCV",
//                flags     = 30,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            double inVolume [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.mfi (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        inVolume ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int midPointLookback(
//        int optInTimePeriod) {
//    return super.midPointLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MIDPOINT",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode midPoint(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.midPoint (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int midPriceLookback(
//        int optInTimePeriod) {
//    return super.midPriceLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MIDPRICE",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode midPrice(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHL",
//                flags     = 6,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.midPrice (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int minLookback(
//        int optInTimePeriod) {
//    return super.minLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MIN",
//        group = "Math Operators",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode min(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.min (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int minIndexLookback(
//        int optInTimePeriod) {
//    return super.minIndexLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MININDEX",
//        group = "Math Operators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode minIndex(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outInteger",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outInteger[]
//
//) {
//    return super.minIndex (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outInteger
//); }
//
//
//public int minMaxLookback(
//        int optInTimePeriod) {
//    return super.minMaxLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MINMAX",
//        group = "Math Operators",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 2
//)
//public RetCode minMax(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outMin",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMin[],
//            @OutputParameterInfo(
//                paramName = "outMax",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outMax[]
//) {
//    return super.minMax (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outMin,
//        outMax
//); }
//
//
//public int minMaxIndexLookback(
//        int optInTimePeriod) {
//    return super.minMaxIndexLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MINMAXINDEX",
//        group = "Math Operators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 2
//)
//public RetCode minMaxIndex(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outMinIdx",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outMinIdx[]
//,
//            @OutputParameterInfo(
//                paramName = "outMaxIdx",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Integer
//            )
//            int outMaxIdx[]
//
//) {
//    return super.minMaxIndex (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outMinIdx,
//        outMaxIdx
//); }
//
//
//public int minusDILookback(
//        int optInTimePeriod) {
//    return super.minusDILookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MINUS_DI",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode minusDI(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.minusDI (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int minusDMLookback(
//        int optInTimePeriod) {
//    return super.minusDMLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MINUS_DM",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode minusDM(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHL",
//                flags     = 6,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.minusDM (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int momLookback(
//        int optInTimePeriod) {
//    return super.momLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "MOM",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode mom(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 10,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.mom (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int multLookback(
//) {
//    return super.multLookback(
//); }
//
//@FuncInfo(
//        name  = "MULT",
//        group = "Math Operators",
//        flags = 0,
//        nbInput    = 2,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode mult(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal0",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal0[],
//            @InputParameterInfo(
//                paramName = "inReal1",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal1[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.mult (
//        startIdx,
//        endIdx,
//        inReal0,
//        inReal1,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int natrLookback(
//        int optInTimePeriod) {
//    return super.natrLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "NATR",
//        group = "Volatility Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode natr(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.natr (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int obvLookback(
//) {
//    return super.obvLookback(
//); }
//
//@FuncInfo(
//        name  = "OBV",
//        group = "Volume Indicators",
//        flags = 0,
//        nbInput    = 2,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode obv(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @InputParameterInfo(
//                paramName = "inPriceV",
//                flags     = 16,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inVolume [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.obv (
//        startIdx,
//        endIdx,
//        inReal,
//        inVolume ,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int plusDILookback(
//        int optInTimePeriod) {
//    return super.plusDILookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "PLUS_DI",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode plusDI(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.plusDI (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int plusDMLookback(
//        int optInTimePeriod) {
//    return super.plusDMLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "PLUS_DM",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode plusDM(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHL",
//                flags     = 6,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.plusDM (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int ppoLookback(
//        int optInFastPeriod,
//        int optInSlowPeriod,
//        MAType optInMAType) {
//    return super.ppoLookback(
//        optInFastPeriod,
//        optInSlowPeriod,
//        optInMAType); }
//
//@FuncInfo(
//        name  = "PPO",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 3,
//        nbOutput   = 1
//)
//public RetCode ppo(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInFastPeriod",
//                displayName  = "Fast Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastPeriod",
//                    defaultValue = 12,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowPeriod",
//                displayName  = "Slow Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSlowPeriod",
//                    defaultValue = 26,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSlowPeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInMAType",
//                displayName  = "MA Type",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInMAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInMAType,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.ppo (
//        startIdx,
//        endIdx,
//        inReal,
//        optInFastPeriod,
//        optInSlowPeriod,
//        optInMAType,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int rocLookback(
//        int optInTimePeriod) {
//    return super.rocLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "ROC",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode roc(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 10,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.roc (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int rocPLookback(
//        int optInTimePeriod) {
//    return super.rocPLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "ROCP",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode rocP(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 10,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.rocP (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int rocRLookback(
//        int optInTimePeriod) {
//    return super.rocRLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "ROCR",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode rocR(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 10,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.rocR (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int rocR100Lookback(
//        int optInTimePeriod) {
//    return super.rocR100Lookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "ROCR100",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode rocR100(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 10,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.rocR100 (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int rsiLookback(
//        int optInTimePeriod) {
//    return super.rsiLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "RSI",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode rsi(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.rsi (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int sarLookback(
//        double optInAcceleration,
//        double optInMaximum) {
//    return super.sarLookback(
//        optInAcceleration,
//        optInMaximum); }
//
//@FuncInfo(
//        name  = "SAR",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 2,
//        nbOutput   = 1
//)
//public RetCode sar(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHL",
//                flags     = 6,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            @OptInputParameterInfo(
//                paramName    = "optInAcceleration",
//                displayName  = "Acceleration Factor",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInAcceleration",
//                    defaultValue = 0.02000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.01000,
//                    suggested_end       = 0.20000,
//                    suggested_increment = 0.01000
//            )
//            double optInAcceleration,
//            @OptInputParameterInfo(
//                paramName    = "optInMaximum",
//                displayName  = "AF Maximum",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInMaximum",
//                    defaultValue = 0.20000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.20000,
//                    suggested_end       = 0.40000,
//                    suggested_increment = 0.01000
//            )
//            double optInMaximum,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.sar (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        optInAcceleration,
//        optInMaximum,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int sarExtLookback(
//        double optInStartValue,
//        double optInOffsetOnReverse,
//        double optInAccelerationInitLong,
//        double optInAccelerationLong,
//        double optInAccelerationMaxLong,
//        double optInAccelerationInitShort,
//        double optInAccelerationShort,
//        double optInAccelerationMaxShort) {
//    return super.sarExtLookback(
//        optInStartValue,
//        optInOffsetOnReverse,
//        optInAccelerationInitLong,
//        optInAccelerationLong,
//        optInAccelerationMaxLong,
//        optInAccelerationInitShort,
//        optInAccelerationShort,
//        optInAccelerationMaxShort); }
//
//@FuncInfo(
//        name  = "SAREXT",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 8,
//        nbOutput   = 1
//)
//public RetCode sarExt(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHL",
//                flags     = 6,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            @OptInputParameterInfo(
//                paramName    = "optInStartValue",
//                displayName  = "Start Value",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInStartValue",
//                    defaultValue = 0.00000,
//                    min          = -30000000000000002000000000000000000000.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.00000,
//                    suggested_end       = 0.00000,
//                    suggested_increment = 0.00000
//            )
//            double optInStartValue,
//            @OptInputParameterInfo(
//                paramName    = "optInOffsetOnReverse",
//                displayName  = "Offset on Reverse",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInOffsetOnReverse",
//                    defaultValue = 0.00000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.01000,
//                    suggested_end       = 0.15000,
//                    suggested_increment = 0.01000
//            )
//            double optInOffsetOnReverse,
//            @OptInputParameterInfo(
//                paramName    = "optInAccelerationInitLong",
//                displayName  = "AF Init Long",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInAccelerationInitLong",
//                    defaultValue = 0.02000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.01000,
//                    suggested_end       = 0.19000,
//                    suggested_increment = 0.01000
//            )
//            double optInAccelerationInitLong,
//            @OptInputParameterInfo(
//                paramName    = "optInAccelerationLong",
//                displayName  = "AF Long",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInAccelerationLong",
//                    defaultValue = 0.02000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.01000,
//                    suggested_end       = 0.20000,
//                    suggested_increment = 0.01000
//            )
//            double optInAccelerationLong,
//            @OptInputParameterInfo(
//                paramName    = "optInAccelerationMaxLong",
//                displayName  = "AF Max Long",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInAccelerationMaxLong",
//                    defaultValue = 0.20000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.20000,
//                    suggested_end       = 0.40000,
//                    suggested_increment = 0.01000
//            )
//            double optInAccelerationMaxLong,
//            @OptInputParameterInfo(
//                paramName    = "optInAccelerationInitShort",
//                displayName  = "AF Init Short",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInAccelerationInitShort",
//                    defaultValue = 0.02000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.01000,
//                    suggested_end       = 0.19000,
//                    suggested_increment = 0.01000
//            )
//            double optInAccelerationInitShort,
//            @OptInputParameterInfo(
//                paramName    = "optInAccelerationShort",
//                displayName  = "AF Short",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInAccelerationShort",
//                    defaultValue = 0.02000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.01000,
//                    suggested_end       = 0.20000,
//                    suggested_increment = 0.01000
//            )
//            double optInAccelerationShort,
//            @OptInputParameterInfo(
//                paramName    = "optInAccelerationMaxShort",
//                displayName  = "AF Max Short",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInAccelerationMaxShort",
//                    defaultValue = 0.20000,
//                    min          = 0.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 4,
//                    suggested_start     = 0.20000,
//                    suggested_end       = 0.40000,
//                    suggested_increment = 0.01000
//            )
//            double optInAccelerationMaxShort,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.sarExt (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        optInStartValue,
//        optInOffsetOnReverse,
//        optInAccelerationInitLong,
//        optInAccelerationLong,
//        optInAccelerationMaxLong,
//        optInAccelerationInitShort,
//        optInAccelerationShort,
//        optInAccelerationMaxShort,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int sinLookback(
//) {
//    return super.sinLookback(
//); }
//
//@FuncInfo(
//        name  = "SIN",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode sin(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.sin (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int sinhLookback(
//) {
//    return super.sinhLookback(
//); }
//
//@FuncInfo(
//        name  = "SINH",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode sinh(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.sinh (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int smaLookback(
//        int optInTimePeriod) {
//    return super.smaLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "SMA",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode sma(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.sma (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int sqrtLookback(
//) {
//    return super.sqrtLookback(
//); }
//
//@FuncInfo(
//        name  = "SQRT",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode sqrt(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.sqrt (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int stdDevLookback(
//        int optInTimePeriod,
//        double optInNbDev) {
//    return super.stdDevLookback(
//        optInTimePeriod,
//        optInNbDev); }
//
//@FuncInfo(
//        name  = "STDDEV",
//        group = "Statistic Functions",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 2,
//        nbOutput   = 1
//)
//public RetCode stdDev(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 5,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInNbDev",
//                displayName  = "Deviations",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInNbDev",
//                    defaultValue = 1.00000,
//                    min          = -30000000000000002000000000000000000000.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 2,
//                    suggested_start     = -2.00000,
//                    suggested_end       = 2.00000,
//                    suggested_increment = 0.20000
//            )
//            double optInNbDev,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.stdDev (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        optInNbDev,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int stochLookback(
//        int optInFastK_Period,
//        int optInSlowK_Period,
//        MAType optInSlowK_MAType,
//        int optInSlowD_Period,
//        MAType optInSlowD_MAType) {
//    return super.stochLookback(
//        optInFastK_Period,
//        optInSlowK_Period,
//        optInSlowK_MAType,
//        optInSlowD_Period,
//        optInSlowD_MAType); }
//
//@FuncInfo(
//        name  = "STOCH",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 5,
//        nbOutput   = 2
//)
//public RetCode stoch(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInFastK_Period",
//                displayName  = "Fast-K Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastK_Period",
//                    defaultValue = 5,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastK_Period,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowK_Period",
//                displayName  = "Slow-K Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSlowK_Period",
//                    defaultValue = 3,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSlowK_Period,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowK_MAType",
//                displayName  = "Slow-K MA",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInSlowK_MAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInSlowK_MAType,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowD_Period",
//                displayName  = "Slow-D Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInSlowD_Period",
//                    defaultValue = 3,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInSlowD_Period,
//            @OptInputParameterInfo(
//                paramName    = "optInSlowD_MAType",
//                displayName  = "Slow-D MA",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInSlowD_MAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInSlowD_MAType,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outSlowK",
//                flags     = 4,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outSlowK[],
//            @OutputParameterInfo(
//                paramName = "outSlowD",
//                flags     = 4,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outSlowD[]
//) {
//    return super.stoch (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInFastK_Period,
//        optInSlowK_Period,
//        optInSlowK_MAType,
//        optInSlowD_Period,
//        optInSlowD_MAType,
//        outBegIdx,
//        outNBElement,
//        outSlowK,
//        outSlowD
//); }
//
//
//public int stochFLookback(
//        int optInFastK_Period,
//        int optInFastD_Period,
//        MAType optInFastD_MAType) {
//    return super.stochFLookback(
//        optInFastK_Period,
//        optInFastD_Period,
//        optInFastD_MAType); }
//
//@FuncInfo(
//        name  = "STOCHF",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 3,
//        nbOutput   = 2
//)
//public RetCode stochF(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInFastK_Period",
//                displayName  = "Fast-K Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastK_Period",
//                    defaultValue = 5,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastK_Period,
//            @OptInputParameterInfo(
//                paramName    = "optInFastD_Period",
//                displayName  = "Fast-D Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastD_Period",
//                    defaultValue = 3,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastD_Period,
//            @OptInputParameterInfo(
//                paramName    = "optInFastD_MAType",
//                displayName  = "Fast-D MA",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInFastD_MAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInFastD_MAType,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outFastK",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outFastK[],
//            @OutputParameterInfo(
//                paramName = "outFastD",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outFastD[]
//) {
//    return super.stochF (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInFastK_Period,
//        optInFastD_Period,
//        optInFastD_MAType,
//        outBegIdx,
//        outNBElement,
//        outFastK,
//        outFastD
//); }
//
//
//public int stochRsiLookback(
//        int optInTimePeriod,
//        int optInFastK_Period,
//        int optInFastD_Period,
//        MAType optInFastD_MAType) {
//    return super.stochRsiLookback(
//        optInTimePeriod,
//        optInFastK_Period,
//        optInFastD_Period,
//        optInFastD_MAType); }
//
//@FuncInfo(
//        name  = "STOCHRSI",
//        group = "Momentum Indicators",
//        flags = 134217728,
//        nbInput    = 1,
//        nbOptInput = 4,
//        nbOutput   = 2
//)
//public RetCode stochRsi(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInFastK_Period",
//                displayName  = "Fast-K Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastK_Period",
//                    defaultValue = 5,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastK_Period,
//            @OptInputParameterInfo(
//                paramName    = "optInFastD_Period",
//                displayName  = "Fast-D Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInFastD_Period",
//                    defaultValue = 3,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInFastD_Period,
//            @OptInputParameterInfo(
//                paramName    = "optInFastD_MAType",
//                displayName  = "Fast-D MA",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerList,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerList.class
//            )
//            @IntegerList(
//                    paramName    = "optInFastD_MAType",
//                    defaultValue = 0,
//                    value  = { 0, 1, 2, 3, 4, 5, 6, 7, 8 },
//                    string = { "SMA", "EMA", "WMA", "DEMA", "TEMA", "TRIMA", "KAMA", "MAMA", "T3" }
//            )
//            MAType optInFastD_MAType,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outFastK",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outFastK[],
//            @OutputParameterInfo(
//                paramName = "outFastD",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outFastD[]
//) {
//    return super.stochRsi (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        optInFastK_Period,
//        optInFastD_Period,
//        optInFastD_MAType,
//        outBegIdx,
//        outNBElement,
//        outFastK,
//        outFastD
//); }
//
//
//public int subLookback(
//) {
//    return super.subLookback(
//); }
//
//@FuncInfo(
//        name  = "SUB",
//        group = "Math Operators",
//        flags = 0,
//        nbInput    = 2,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode sub(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal0",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal0[],
//            @InputParameterInfo(
//                paramName = "inReal1",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal1[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.sub (
//        startIdx,
//        endIdx,
//        inReal0,
//        inReal1,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int sumLookback(
//        int optInTimePeriod) {
//    return super.sumLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "SUM",
//        group = "Math Operators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode sum(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.sum (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int t3Lookback(
//        int optInTimePeriod,
//        double optInVFactor) {
//    return super.t3Lookback(
//        optInTimePeriod,
//        optInVFactor); }
//
//@FuncInfo(
//        name  = "T3",
//        group = "Overlap Studies",
//        flags = 150994944,
//        nbInput    = 1,
//        nbOptInput = 2,
//        nbOutput   = 1
//)
//public RetCode t3(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 5,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInVFactor",
//                displayName  = "Volume Factor",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInVFactor",
//                    defaultValue = 0.70000,
//                    min          = 0.00000,
//                    max          = 1.00000,
//                    precision    = 2,
//                    suggested_start     = 0.01000,
//                    suggested_end       = 1.00000,
//                    suggested_increment = 0.05000
//            )
//            double optInVFactor,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.t3 (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        optInVFactor,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int tanLookback(
//) {
//    return super.tanLookback(
//); }
//
//@FuncInfo(
//        name  = "TAN",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode tan(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.tan (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int tanhLookback(
//) {
//    return super.tanhLookback(
//); }
//
//@FuncInfo(
//        name  = "TANH",
//        group = "Math Transform",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode tanh(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.tanh (
//        startIdx,
//        endIdx,
//        inReal,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int temaLookback(
//        int optInTimePeriod) {
//    return super.temaLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "TEMA",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode tema(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.tema (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int trueRangeLookback(
//) {
//    return super.trueRangeLookback(
//); }
//
//@FuncInfo(
//        name  = "TRANGE",
//        group = "Volatility Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode trueRange(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.trueRange (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int trimaLookback(
//        int optInTimePeriod) {
//    return super.trimaLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "TRIMA",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode trima(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.trima (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int trixLookback(
//        int optInTimePeriod) {
//    return super.trixLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "TRIX",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode trix(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.trix (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int tsfLookback(
//        int optInTimePeriod) {
//    return super.tsfLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "TSF",
//        group = "Statistic Functions",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode tsf(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.tsf (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int typPriceLookback(
//) {
//    return super.typPriceLookback(
//); }
//
//@FuncInfo(
//        name  = "TYPPRICE",
//        group = "Price Transform",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode typPrice(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.typPrice (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int ultOscLookback(
//        int optInTimePeriod1,
//        int optInTimePeriod2,
//        int optInTimePeriod3) {
//    return super.ultOscLookback(
//        optInTimePeriod1,
//        optInTimePeriod2,
//        optInTimePeriod3); }
//
//@FuncInfo(
//        name  = "ULTOSC",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 3,
//        nbOutput   = 1
//)
//public RetCode ultOsc(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod1",
//                displayName  = "First Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod1",
//                    defaultValue = 7,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod1,
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod2",
//                displayName  = "Second Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod2",
//                    defaultValue = 14,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod2,
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod3",
//                displayName  = "Third Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod3",
//                    defaultValue = 28,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod3,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.ultOsc (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod1,
//        optInTimePeriod2,
//        optInTimePeriod3,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int varianceLookback(
//        int optInTimePeriod,
//        double optInNbDev) {
//    return super.varianceLookback(
//        optInTimePeriod,
//        optInNbDev); }
//
//@FuncInfo(
//        name  = "VAR",
//        group = "Statistic Functions",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 2,
//        nbOutput   = 1
//)
//public RetCode variance(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 5,
//                    min          = 1,
//                    max          = 100000,
//                    suggested_start     = 1,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            @OptInputParameterInfo(
//                paramName    = "optInNbDev",
//                displayName  = "Deviations",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_RealRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.RealRange.class
//            )
//            @RealRange(
//                    paramName    = "optInNbDev",
//                    defaultValue = 1.00000,
//                    min          = -30000000000000002000000000000000000000.00000,
//                    max          = 30000000000000002000000000000000000000.00000,
//                    precision    = 2,
//                    suggested_start     = -2.00000,
//                    suggested_end       = 2.00000,
//                    suggested_increment = 0.20000
//            )
//            double optInNbDev,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.variance (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        optInNbDev,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int wclPriceLookback(
//) {
//    return super.wclPriceLookback(
//); }
//
//@FuncInfo(
//        name  = "WCLPRICE",
//        group = "Price Transform",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 0,
//        nbOutput   = 1
//)
//public RetCode wclPrice(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.wclPrice (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int willRLookback(
//        int optInTimePeriod) {
//    return super.willRLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "WILLR",
//        group = "Momentum Indicators",
//        flags = 0,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode willR(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inPriceHLC",
//                flags     = 14,
//                type = InputParameterType.TA_Input_Price
//            )
//            double inHigh [],
//            double inLow [],
//            double inClose [],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 14,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.willR (
//        startIdx,
//        endIdx,
//        inHigh ,
//        inLow ,
//        inClose ,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//public int wmaLookback(
//        int optInTimePeriod) {
//    return super.wmaLookback(
//        optInTimePeriod); }
//
//@FuncInfo(
//        name  = "WMA",
//        group = "Overlap Studies",
//        flags = 16777216,
//        nbInput    = 1,
//        nbOptInput = 1,
//        nbOutput   = 1
//)
//public RetCode wma(
//            int startIdx,
//            int endIdx,
//            @InputParameterInfo(
//                paramName = "inReal",
//                flags     = 0,
//                type = InputParameterType.TA_Input_Real
//            )
//            double inReal[],
//            @OptInputParameterInfo(
//                paramName    = "optInTimePeriod",
//                displayName  = "Time Period",
//                flags        = 0,
//                type    = OptInputParameterType.TA_OptInput_IntegerRange,
//                dataSet = com.tictactec.ta.lib.meta.annotation.IntegerRange.class
//            )
//            @IntegerRange(
//                    paramName    = "optInTimePeriod",
//                    defaultValue = 30,
//                    min          = 2,
//                    max          = 100000,
//                    suggested_start     = 4,
//                    suggested_end       = 200,
//                    suggested_increment = 1
//            )
//            int optInTimePeriod,
//            MInteger     outBegIdx,
//            MInteger     outNBElement,
//            @OutputParameterInfo(
//                paramName = "outReal",
//                flags     = 1,
//                type = OutputParameterType.TA_Output_Real
//            )
//            double outReal[]
//) {
//    return super.wma (
//        startIdx,
//        endIdx,
//        inReal,
//        optInTimePeriod,
//        outBegIdx,
//        outNBElement,
//        outReal
//); }
//
//
//

}
