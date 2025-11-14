<?php
// source: phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon
// source: /Users/didou/dev/machour/clictopay/phpstan.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_e5800887a9 extends _PHPStan_e870ac104\Nette\DI\Container
{
	protected $tags = [
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'017' => true,
			'0226' => true,
			'0232' => true,
			'0244' => true,
			'0251' => true,
			'0262' => true,
			'0277' => true,
			'0307' => true,
			'0316' => true,
			'0330' => true,
			'0359' => true,
			'0703' => true,
			'0704' => true,
			'0705' => true,
			'0706' => true,
			'0707' => true,
			'0708' => true,
			'0709' => true,
			'0710' => true,
			'0711' => true,
			'0712' => true,
			'0713' => true,
		],
		'phpstan.broker.allowedSubTypesClassReflectionExtension' => ['026' => true, '027' => true],
		'phpstan.gnsr.stmtHandler' => [
			'034' => true,
			'035' => true,
			'036' => true,
			'037' => true,
			'038' => true,
			'039' => true,
			'040' => true,
			'041' => true,
		],
		'phpstan.gnsr.exprHandler' => [
			'043' => true,
			'044' => true,
			'045' => true,
			'046' => true,
			'047' => true,
			'048' => true,
			'049' => true,
			'050' => true,
			'051' => true,
			'052' => true,
		],
		'phpstan.parser.richParserNodeVisitor' => [
			'071' => true,
			'072' => true,
			'073' => true,
			'074' => true,
			'075' => true,
			'077' => true,
			'078' => true,
			'079' => true,
			'080' => true,
			'081' => true,
			'082' => true,
			'083' => true,
			'084' => true,
			'085' => true,
			'086' => true,
			'087' => true,
			'088' => true,
			'089' => true,
			'090' => true,
			'091' => true,
			'092' => true,
			'093' => true,
			'094' => true,
		],
		'phpstan.stubFilesExtension' => ['098' => true, '0102' => true, '0105' => true, '0107' => true, '0108' => true],
		'phpstan.rules.rule' => [
			'0116' => true,
			'0117' => true,
			'0118' => true,
			'0119' => true,
			'0120' => true,
			'0153' => true,
			'0154' => true,
			'0155' => true,
			'0156' => true,
			'0157' => true,
			'0158' => true,
			'0159' => true,
			'0160' => true,
			'0161' => true,
			'0162' => true,
			'0388' => true,
			'0389' => true,
			'0390' => true,
			'0391' => true,
			'0392' => true,
			'0393' => true,
			'0394' => true,
			'0395' => true,
			'0396' => true,
			'0397' => true,
			'0398' => true,
			'0399' => true,
			'0400' => true,
			'0401' => true,
			'0402' => true,
			'0403' => true,
			'0404' => true,
			'0405' => true,
			'0406' => true,
			'0407' => true,
			'0408' => true,
			'0409' => true,
			'0410' => true,
			'0411' => true,
			'0412' => true,
			'0413' => true,
			'0414' => true,
			'0415' => true,
			'0416' => true,
			'0417' => true,
			'0418' => true,
			'0419' => true,
			'0420' => true,
			'0421' => true,
			'0422' => true,
			'0423' => true,
			'0424' => true,
			'0425' => true,
			'0426' => true,
			'0427' => true,
			'0428' => true,
			'0429' => true,
			'0430' => true,
			'0431' => true,
			'0432' => true,
			'0433' => true,
			'0434' => true,
			'0435' => true,
			'0436' => true,
			'0437' => true,
			'0438' => true,
			'0439' => true,
			'0440' => true,
			'0441' => true,
			'0442' => true,
			'0443' => true,
			'0444' => true,
			'0445' => true,
			'0446' => true,
			'0447' => true,
			'0448' => true,
			'0449' => true,
			'0450' => true,
			'0451' => true,
			'0452' => true,
			'0453' => true,
			'0454' => true,
			'0455' => true,
			'0456' => true,
			'0457' => true,
			'0458' => true,
			'0459' => true,
			'0460' => true,
			'0461' => true,
			'0462' => true,
			'0463' => true,
			'0464' => true,
			'0465' => true,
			'0466' => true,
			'0467' => true,
			'0468' => true,
			'0469' => true,
			'0470' => true,
			'0471' => true,
			'0472' => true,
			'0473' => true,
			'0474' => true,
			'0475' => true,
			'0476' => true,
			'0477' => true,
			'0478' => true,
			'0479' => true,
			'0480' => true,
			'0481' => true,
			'0482' => true,
			'0483' => true,
			'0484' => true,
			'0485' => true,
			'0486' => true,
			'0487' => true,
			'0488' => true,
			'0489' => true,
			'0490' => true,
			'0491' => true,
			'0492' => true,
			'0493' => true,
			'0494' => true,
			'0495' => true,
			'0496' => true,
			'0497' => true,
			'0498' => true,
			'0499' => true,
			'0500' => true,
			'0501' => true,
			'0502' => true,
			'0503' => true,
			'0504' => true,
			'0505' => true,
			'0506' => true,
			'0507' => true,
			'0508' => true,
			'0509' => true,
			'0510' => true,
			'0511' => true,
			'0512' => true,
			'0513' => true,
			'0514' => true,
			'0515' => true,
			'0516' => true,
			'0517' => true,
			'0518' => true,
			'0519' => true,
			'0520' => true,
			'0521' => true,
			'0522' => true,
			'0523' => true,
			'0524' => true,
			'0525' => true,
			'0526' => true,
			'0527' => true,
			'0528' => true,
			'0529' => true,
			'0530' => true,
			'0531' => true,
			'0532' => true,
			'0533' => true,
			'0534' => true,
			'0535' => true,
			'0536' => true,
			'0537' => true,
			'0538' => true,
			'0539' => true,
			'0540' => true,
			'0541' => true,
			'0542' => true,
			'0543' => true,
			'0544' => true,
			'0545' => true,
			'0546' => true,
			'0547' => true,
			'0548' => true,
			'0549' => true,
			'0550' => true,
			'0551' => true,
			'0552' => true,
			'0553' => true,
			'0554' => true,
			'0555' => true,
			'0556' => true,
			'0557' => true,
			'0558' => true,
			'0559' => true,
			'0560' => true,
			'0561' => true,
			'0562' => true,
			'0563' => true,
			'0564' => true,
			'0565' => true,
			'0566' => true,
			'0567' => true,
			'0568' => true,
			'0569' => true,
			'0570' => true,
			'0571' => true,
			'0572' => true,
			'0573' => true,
			'0574' => true,
			'0575' => true,
			'0576' => true,
			'0577' => true,
			'0578' => true,
			'0579' => true,
			'0580' => true,
			'0581' => true,
			'0582' => true,
			'0583' => true,
			'0584' => true,
			'0585' => true,
			'0586' => true,
			'0587' => true,
			'0588' => true,
			'0589' => true,
			'0590' => true,
			'0591' => true,
			'0592' => true,
			'0593' => true,
			'0594' => true,
			'0595' => true,
			'0596' => true,
			'0597' => true,
			'0598' => true,
			'0599' => true,
			'0600' => true,
			'0601' => true,
			'0602' => true,
			'0603' => true,
			'0604' => true,
			'0605' => true,
			'0606' => true,
			'0607' => true,
			'0608' => true,
			'0609' => true,
			'0610' => true,
			'0611' => true,
			'0612' => true,
			'0613' => true,
			'0614' => true,
			'0615' => true,
			'0616' => true,
			'0617' => true,
			'0618' => true,
			'0619' => true,
			'0620' => true,
			'0621' => true,
			'0622' => true,
			'0623' => true,
			'0624' => true,
			'0625' => true,
			'0626' => true,
			'0627' => true,
			'0628' => true,
			'0629' => true,
			'0630' => true,
			'0631' => true,
			'0632' => true,
			'0633' => true,
			'0634' => true,
			'0635' => true,
			'0636' => true,
			'0637' => true,
			'0638' => true,
			'0639' => true,
			'0640' => true,
			'0641' => true,
			'0642' => true,
			'0643' => true,
			'0644' => true,
			'0645' => true,
			'0646' => true,
			'0647' => true,
			'0648' => true,
			'0649' => true,
			'0650' => true,
			'0651' => true,
			'0652' => true,
			'0653' => true,
			'0654' => true,
			'0655' => true,
			'0656' => true,
			'0657' => true,
			'0658' => true,
			'0659' => true,
			'0660' => true,
			'0661' => true,
			'0662' => true,
			'0663' => true,
			'0664' => true,
			'0665' => true,
			'0666' => true,
			'0667' => true,
			'0668' => true,
			'0669' => true,
			'0670' => true,
			'0671' => true,
			'0726' => true,
			'0727' => true,
			'0728' => true,
		],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0190' => true,
			'0191' => true,
			'0193' => true,
			'0195' => true,
			'0198' => true,
			'0200' => true,
			'0201' => true,
			'0202' => true,
			'0203' => true,
			'0204' => true,
			'0207' => true,
			'0209' => true,
			'0210' => true,
			'0213' => true,
			'0214' => true,
			'0215' => true,
			'0218' => true,
			'0221' => true,
			'0222' => true,
			'0223' => true,
			'0225' => true,
			'0227' => true,
			'0228' => true,
			'0229' => true,
			'0230' => true,
			'0231' => true,
			'0233' => true,
			'0234' => true,
			'0235' => true,
			'0237' => true,
			'0242' => true,
			'0243' => true,
			'0246' => true,
			'0248' => true,
			'0249' => true,
			'0250' => true,
			'0251' => true,
			'0252' => true,
			'0253' => true,
			'0255' => true,
			'0260' => true,
			'0261' => true,
			'0263' => true,
			'0264' => true,
			'0265' => true,
			'0266' => true,
			'0267' => true,
			'0269' => true,
			'0271' => true,
			'0273' => true,
			'0274' => true,
			'0276' => true,
			'0279' => true,
			'0280' => true,
			'0281' => true,
			'0284' => true,
			'0285' => true,
			'0286' => true,
			'0287' => true,
			'0289' => true,
			'0290' => true,
			'0291' => true,
			'0293' => true,
			'0294' => true,
			'0295' => true,
			'0296' => true,
			'0298' => true,
			'0299' => true,
			'0300' => true,
			'0301' => true,
			'0302' => true,
			'0305' => true,
			'0309' => true,
			'0310' => true,
			'0311' => true,
			'0312' => true,
			'0313' => true,
			'0314' => true,
			'0315' => true,
			'0317' => true,
			'0318' => true,
			'0322' => true,
			'0325' => true,
			'0326' => true,
			'0329' => true,
			'0331' => true,
			'0334' => true,
			'0336' => true,
			'0337' => true,
			'0338' => true,
			'0339' => true,
			'0341' => true,
			'0342' => true,
			'0343' => true,
			'0344' => true,
			'0346' => true,
			'0347' => true,
			'0348' => true,
			'0350' => true,
			'0351' => true,
			'0354' => true,
			'0357' => true,
			'0358' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0194' => true,
			'0208' => true,
			'0211' => true,
			'0212' => true,
			'0219' => true,
			'0224' => true,
			'0247' => true,
			'0254' => true,
			'0257' => true,
			'0258' => true,
			'0282' => true,
			'0292' => true,
			'0297' => true,
			'0303' => true,
			'0319' => true,
			'0323' => true,
			'0324' => true,
			'0332' => true,
			'0335' => true,
			'0352' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'0197' => true,
			'0217' => true,
			'0272' => true,
			'0283' => true,
			'0321' => true,
			'0328' => true,
			'0330' => true,
			'0353' => true,
		],
		'phpstan.broker.operatorTypeSpecifyingExtension' => ['0199' => true],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0205' => true,
			'0206' => true,
			'0220' => true,
			'0245' => true,
			'0278' => true,
			'0288' => true,
			'0320' => true,
			'0345' => true,
		],
		'phpstan.broker.propertiesClassReflectionExtension' => ['0236' => true],
		'phpstan.functionParameterClosureTypeExtension' => ['0240' => true],
		'phpstan.functionParameterOutTypeExtension' => ['0241' => true, '0327' => true, '0355' => true],
		'phpstan.dynamicMethodThrowTypeExtension' => ['0256' => true, '0259' => true, '0308' => true],
		'phpstan.dynamicFunctionThrowTypeExtension' => [
			'0268' => true,
			'0270' => true,
			'0304' => true,
			'0333' => true,
			'0349' => true,
		],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0356' => true],
		'phpstan.diagnoseExtension' => ['0380' => true],
		'phpstan.collector' => [
			'0672' => true,
			'0673' => true,
			'0674' => true,
			'0675' => true,
			'0676' => true,
			'0677' => true,
			'0678' => true,
			'0679' => true,
			'0680' => true,
		],
	];

	protected $types = ['container' => '_PHPStan_e870ac104\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_e870ac104\Nette\DI\Container' => [['container']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['01']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['02']],
		'PHPStan\Dependency\DependencyResolver' => [['03']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\FuzzyRelativePathHelper' => [['relativePathHelper']],
		'PHPStan\File\FileExcluderFactory' => [['04']],
		'PHPStan\File\FileHelper' => [['05']],
		'PHPStan\File\FileMonitor' => [['06']],
		'PHPStan\Reflection\InitializerExprTypeResolver' => [['07']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['010'], ['08', '09']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['08']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['09']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['011']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['012']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['013']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory' => [['014']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['015']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			0 => ['betterReflectionReflector'],
			2 => [1 => 'originalBetterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [
			0 => ['betterReflectionReflector'],
			2 => [1 => 'nodeScopeResolverReflector'],
		],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['016']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'017',
				'0226',
				'0232',
				'0244',
				'0251',
				'0262',
				'0277',
				'0307',
				'0316',
				'0330',
				'0359',
				'0703',
				'0704',
				'0705',
				'0706',
				'0707',
				'0708',
				'0709',
				'0710',
				'0711',
				'0712',
				'0713',
			],
		],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension' => [['017']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['018']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['019']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['020']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['021']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['022']],
		'PHPStan\Reflection\Deprecation\DeprecationProvider' => [['023']],
		'PHPStan\Reflection\AttributeReflectionFactory' => [['024']],
		'PHPStan\Reflection\ConstructorsHelper' => [['025']],
		'PHPStan\Reflection\AllowedSubTypesClassReflectionExtension' => [['026', '027']],
		'PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension' => [['026']],
		'PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension' => [['027']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['028']],
		'PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider' => [['028']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\Analyser\Analyser' => [['029']],
		'PHPStan\Analyser\RuleErrorTransformer' => [['030']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['031']],
		'PHPStan\Analyser\LocalIgnoresProcessor' => [['032']],
		'PHPStan\Analyser\Generator\InternalGeneratorScopeFactory' => [['033']],
		'PHPStan\Analyser\Generator\LazyInternalGeneratorScopeFactory' => [['033']],
		'PHPStan\Analyser\Generator\StmtHandler' => [['034', '035', '036', '037', '038', '039', '040', '041']],
		'PHPStan\Analyser\Generator\StmtHandler\NamespaceHandler' => [['034']],
		'PHPStan\Analyser\Generator\StmtHandler\UseHandler' => [['035']],
		'PHPStan\Analyser\Generator\StmtHandler\DeclareHandler' => [['036']],
		'PHPStan\Analyser\Generator\StmtHandler\ClassMethodHandler' => [['037']],
		'PHPStan\Analyser\Generator\StmtHandler\ClassLikeHandler' => [['038']],
		'PHPStan\Analyser\Generator\StmtHandler\ReturnHandler' => [['039']],
		'PHPStan\Analyser\Generator\StmtHandler\ExpressionHandler' => [['040']],
		'PHPStan\Analyser\Generator\StmtHandler\NopHandler' => [['041']],
		'PHPStan\Analyser\Generator\GeneratorScopeFactory' => [['042']],
		'PHPStan\Analyser\Generator\ExprHandler' => [
			['043', '044', '045', '046', '047', '048', '049', '050', '051', '052'],
		],
		'PHPStan\Analyser\Generator\ExprHandler\CastIntHandler' => [['043']],
		'PHPStan\Analyser\Generator\ExprHandler\FuncCallHandler' => [['044']],
		'PHPStan\Analyser\Generator\ExprHandler\AssignHandler' => [['045']],
		'PHPStan\Analyser\Generator\ExprHandler\MethodCallHandler' => [['046']],
		'PHPStan\Analyser\Generator\ExprHandler\NewHandler' => [['047']],
		'PHPStan\Analyser\Generator\ExprHandler\ClosureHandler' => [['048']],
		'PHPStan\Analyser\Generator\ExprHandler\ScalarIntHandler' => [['049']],
		'PHPStan\Analyser\Generator\ExprHandler\ClassConstFetchHandler' => [['050']],
		'PHPStan\Analyser\Generator\ExprHandler\ScalarStringHandler' => [['051']],
		'PHPStan\Analyser\Generator\ExprHandler\VariableHandler' => [['052']],
		'PHPStan\Analyser\IgnoreErrorExtensionProvider' => [['053']],
		'PHPStan\Analyser\RicherScopeGetTypeHelper' => [['054']],
		'PHPStan\Analyser\NodeScopeResolver' => [['055']],
		'PHPStan\Analyser\FileAnalyser' => [['056']],
		'PHPStan\Analyser\ScopeFactory' => [['057']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\AnalyserResultFinalizer' => [['058']],
		'PHPStan\Analyser\ConstantResolver' => [['059']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\Analyser\Ignore\IgnoreLexer' => [['060']],
		'PHPStan\Analyser\Ignore\IgnoredErrorHelper' => [['061']],
		'PHPStan\Analyser\ConstantResolverFactory' => [['062']],
		'PHPStan\Cache\Cache' => [['063']],
		'PHPStan\Command\FixerApplication' => [['064']],
		'PHPStan\Command\AnalyserRunner' => [['065']],
		'PHPStan\Command\AnalyseApplication' => [['066']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.github',
				'errorFormatter.junit',
				'errorFormatter.checkstyle',
				'errorFormatter.gitlab',
				'errorFormatter.teamcity',
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.json',
				'errorFormatter.prettyJson',
			],
			['067'],
		],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter' => [['067']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['068']],
		'PhpParser\PrettyPrinter\Standard' => [1 => ['069']],
		'PhpParser\PrettyPrinterAbstract' => [1 => ['069']],
		'PhpParser\PrettyPrinter' => [1 => ['069']],
		'PHPStan\Node\Printer\Printer' => [['069']],
		'PHPStan\Node\Printer\ExprPrinter' => [['070']],
		'PhpParser\NodeVisitorAbstract' => [
			[
				'071',
				'072',
				'073',
				'074',
				'075',
				'077',
				'078',
				'079',
				'080',
				'081',
				'082',
				'083',
				'084',
				'085',
				'086',
				'087',
				'088',
				'089',
				'090',
				'091',
				'092',
				'093',
				'094',
				'0682',
				'0691',
				'0692',
			],
		],
		'PhpParser\NodeVisitor' => [
			[
				'071',
				'072',
				'073',
				'074',
				'075',
				'077',
				'078',
				'079',
				'080',
				'081',
				'082',
				'083',
				'084',
				'085',
				'086',
				'087',
				'088',
				'089',
				'090',
				'091',
				'092',
				'093',
				'094',
				'0682',
				'0691',
				'0692',
			],
		],
		'PHPStan\Parser\TypeTraverserInstanceofVisitor' => [['071']],
		'PHPStan\Parser\VariadicFunctionsVisitor' => [['072']],
		'PHPStan\Parser\ArrayFindArgVisitor' => [['073']],
		'PHPStan\Parser\ArrayWalkArgVisitor' => [['074']],
		'PHPStan\Parser\ImplodeArgVisitor' => [['075']],
		'PHPStan\Parser\LexerFactory' => [['076']],
		'PHPStan\Parser\ClosureBindToVarVisitor' => [['077']],
		'PHPStan\Parser\ImmediatelyInvokedClosureVisitor' => [['078']],
		'PHPStan\Parser\MagicConstantParamDefaultVisitor' => [['079']],
		'PHPStan\Parser\ParentStmtTypesVisitor' => [['080']],
		'PHPStan\Parser\DeclarePositionVisitor' => [['081']],
		'PHPStan\Parser\CurlSetOptArgVisitor' => [['082']],
		'PHPStan\Parser\AnonymousClassVisitor' => [['083']],
		'PHPStan\Parser\ArrayMapArgVisitor' => [['084']],
		'PHPStan\Parser\VariadicMethodsVisitor' => [['085']],
		'PHPStan\Parser\ArrowFunctionArgVisitor' => [['086']],
		'PHPStan\Parser\ClosureArgVisitor' => [['087']],
		'PHPStan\Parser\TryCatchTypeVisitor' => [['088']],
		'PHPStan\Parser\ClosureBindArgVisitor' => [['089']],
		'PHPStan\Parser\CurlSetOptArrayArgVisitor' => [['090']],
		'PHPStan\Parser\LastConditionVisitor' => [['091']],
		'PHPStan\Parser\NewAssignedToPropertyVisitor' => [['092']],
		'PHPStan\Parser\ArrayFilterArgVisitor' => [['093']],
		'PHPStan\Parser\StandaloneThrowExprVisitor' => [['094']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['095']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['096']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['097']],
		'PHPStan\PhpDoc\StubFilesExtension' => [['098', '0102', '0105', '0107', '0108']],
		'PHPStan\PhpDoc\BcMathNumberStubFilesExtension' => [['098']],
		'PHPStan\PhpDoc\StubValidator' => [['099']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['0100']],
		'PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider' => [['0100']],
		'PHPStan\PhpDoc\StubFilesProvider' => [['0101']],
		'PHPStan\PhpDoc\DefaultStubFilesProvider' => [['0101']],
		'PHPStan\PhpDoc\SocketSelectStubFilesExtension' => [['0102']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['0103']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['0104']],
		'PHPStan\PhpDoc\JsonValidateStubFilesExtension' => [['0105']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['0106']],
		'PHPStan\PhpDoc\ReflectionClassStubFilesExtension' => [['0107']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\PhpDoc\ReflectionEnumStubFilesExtension' => [['0108']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0109']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesCheck' => [['0110']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0111']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0111']],
		'PHPStan\Rules\Properties\AccessPropertiesCheck' => [['0112']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0113']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0114']],
		'PHPStan\Rules\ClassForbiddenNameCheck' => [['0115']],
		'PHPStan\Rules\Rule' => [
			[
				'0116',
				'0117',
				'0118',
				'0119',
				'0120',
				'0153',
				'0154',
				'0155',
				'0156',
				'0157',
				'0158',
				'0159',
				'0160',
				'0161',
				'0162',
				'0702',
				'0714',
				'0715',
				'0716',
				'0717',
				'0718',
				'0719',
				'0723',
				'0726',
				'0727',
				'0728',
			],
			[
				'0388',
				'0389',
				'0390',
				'0391',
				'0392',
				'0393',
				'0394',
				'0395',
				'0396',
				'0397',
				'0398',
				'0399',
				'0400',
				'0401',
				'0402',
				'0403',
				'0404',
				'0405',
				'0406',
				'0407',
				'0408',
				'0409',
				'0410',
				'0411',
				'0412',
				'0413',
				'0414',
				'0415',
				'0416',
				'0417',
				'0418',
				'0419',
				'0420',
				'0421',
				'0422',
				'0423',
				'0424',
				'0425',
				'0426',
				'0427',
				'0428',
				'0429',
				'0430',
				'0431',
				'0432',
				'0433',
				'0434',
				'0435',
				'0436',
				'0437',
				'0438',
				'0439',
				'0440',
				'0441',
				'0442',
				'0443',
				'0444',
				'0445',
				'0446',
				'0447',
				'0448',
				'0449',
				'0450',
				'0451',
				'0452',
				'0453',
				'0454',
				'0455',
				'0456',
				'0457',
				'0458',
				'0459',
				'0460',
				'0461',
				'0462',
				'0463',
				'0464',
				'0465',
				'0466',
				'0467',
				'0468',
				'0469',
				'0470',
				'0471',
				'0472',
				'0473',
				'0474',
				'0475',
				'0476',
				'0477',
				'0478',
				'0479',
				'0480',
				'0481',
				'0482',
				'0483',
				'0484',
				'0485',
				'0486',
				'0487',
				'0488',
				'0489',
				'0490',
				'0491',
				'0492',
				'0493',
				'0494',
				'0495',
				'0496',
				'0497',
				'0498',
				'0499',
				'0500',
				'0501',
				'0502',
				'0503',
				'0504',
				'0505',
				'0506',
				'0507',
				'0508',
				'0509',
				'0510',
				'0511',
				'0512',
				'0513',
				'0514',
				'0515',
				'0516',
				'0517',
				'0518',
				'0519',
				'0520',
				'0521',
				'0522',
				'0523',
				'0524',
				'0525',
				'0526',
				'0527',
				'0528',
				'0529',
				'0530',
				'0531',
				'0532',
				'0533',
				'0534',
				'0535',
				'0536',
				'0537',
				'0538',
				'0539',
				'0540',
				'0541',
				'0542',
				'0543',
				'0544',
				'0545',
				'0546',
				'0547',
				'0548',
				'0549',
				'0550',
				'0551',
				'0552',
				'0553',
				'0554',
				'0555',
				'0556',
				'0557',
				'0558',
				'0559',
				'0560',
				'0561',
				'0562',
				'0563',
				'0564',
				'0565',
				'0566',
				'0567',
				'0568',
				'0569',
				'0570',
				'0571',
				'0572',
				'0573',
				'0574',
				'0575',
				'0576',
				'0577',
				'0578',
				'0579',
				'0580',
				'0581',
				'0582',
				'0583',
				'0584',
				'0585',
				'0586',
				'0587',
				'0588',
				'0589',
				'0590',
				'0591',
				'0592',
				'0593',
				'0594',
				'0595',
				'0596',
				'0597',
				'0598',
				'0599',
				'0600',
				'0601',
				'0602',
				'0603',
				'0604',
				'0605',
				'0606',
				'0607',
				'0608',
				'0609',
				'0610',
				'0611',
				'0612',
				'0613',
				'0614',
				'0615',
				'0616',
				'0617',
				'0618',
				'0619',
				'0620',
				'0621',
				'0622',
				'0623',
				'0624',
				'0625',
				'0626',
				'0627',
				'0628',
				'0629',
				'0630',
				'0631',
				'0632',
				'0633',
				'0634',
				'0635',
				'0636',
				'0637',
				'0638',
				'0639',
				'0640',
				'0641',
				'0642',
				'0643',
				'0644',
				'0645',
				'0646',
				'0647',
				'0648',
				'0649',
				'0650',
				'0651',
				'0652',
				'0653',
				'0654',
				'0655',
				'0656',
				'0657',
				'0658',
				'0659',
				'0660',
				'0661',
				'0662',
				'0663',
				'0664',
				'0665',
				'0666',
				'0667',
				'0668',
				'0669',
				'0670',
				'0671',
			],
		],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['0116']],
		'PHPStan\Rules\Debug\DumpPhpDocTypeRule' => [['0117']],
		'PHPStan\Rules\Debug\DumpNativeTypeRule' => [['0118']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['0119']],
		'PHPStan\Rules\Debug\DebugScopeRule' => [['0120']],
		'PHPStan\Rules\ClassNameCheck' => [['0121']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['0122']],
		'PHPStan\Rules\AttributesCheck' => [['0123']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\Rules\LazyRegistry' => [['registry']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['0124']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['0125']],
		'PHPStan\Rules\Pure\FunctionPurityCheck' => [['0126']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['0127']],
		'PHPStan\Rules\Functions\PrintfHelper' => [['0128']],
		'PHPStan\Rules\RuleLevelHelper' => [['0129']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['0130']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['0131']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeCheck' => [['0132']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0133']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0134']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['0135']],
		'PHPStan\Rules\ParameterCastableToStringCheck' => [['0136']],
		'PHPStan\Rules\Methods\ParentMethodHelper' => [['0137']],
		'PHPStan\Rules\Methods\AlwaysUsedMethodExtensionProvider' => [['0138']],
		'PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider' => [['0138']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0139']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0140']],
		'PHPStan\Rules\Methods\MethodPrototypeFinder' => [['0141']],
		'PHPStan\Rules\Methods\MethodParameterComparisonHelper' => [['0142']],
		'PHPStan\Rules\Methods\MethodVisibilityComparisonHelper' => [['0143']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0144']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0144']],
		'PHPStan\Rules\TooWideTypehints\TooWideTypeCheck' => [['0145']],
		'PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck' => [['0146']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0147']],
		'PHPStan\Rules\Classes\MethodTagCheck' => [['0148']],
		'PHPStan\Rules\Classes\LocalTypeAliasesCheck' => [['0149']],
		'PHPStan\Rules\Classes\MixinCheck' => [['0150']],
		'PHPStan\Rules\Classes\ConsistentConstructorHelper' => [['0151']],
		'PHPStan\Rules\Classes\PropertyTagCheck' => [['0152']],
		'PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule' => [['0153']],
		'PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule' => [['0154']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule' => [['0155']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule' => [['0156']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule' => [['0157']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule' => [['0158']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule' => [['0159']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule' => [['0160']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule' => [['0161']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule' => [['0162']],
		'PHPStan\Rules\PhpDoc\GenericCallableRuleHelper' => [['0163']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0164']],
		'PHPStan\Rules\PhpDoc\AssertRuleHelper' => [['0165']],
		'PHPStan\Rules\PhpDoc\RequireExtendsCheck' => [['0166']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck' => [['0167']],
		'PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper' => [['0168']],
		'PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper' => [['0169']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['0170']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['0171']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['0172']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['0173'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['0173']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['0174']],
		'PHPStan\Rules\NullsafeCheck' => [['0175']],
		'PHPStan\Rules\IssetCheck' => [['0176']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['0177']],
		'PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper' => [['0178']],
		'PHPStan\Rules\Playground\NeverRuleHelper' => [['0179']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['0180']],
		'PHPStan\Fixable\PhpDoc\PhpDocEditor' => [['0181']],
		'PHPStan\Fixable\Patcher' => [['0182']],
		'PHPStan\Type\TypeAliasResolverProvider' => [['0183']],
		'PHPStan\Type\LazyTypeAliasResolverProvider' => [['0183']],
		'PHPStan\Type\ClosureTypeFactory' => [['0184']],
		'PHPStan\Type\TypeAliasResolver' => [['0185']],
		'PHPStan\Type\UsefulTypeAliasResolver' => [['0185']],
		'PHPStan\Type\Regex\RegexGroupParser' => [['0186']],
		'PHPStan\Type\Regex\RegexExpressionHelper' => [['0187']],
		'PHPStan\Type\BitwiseFlagHelper' => [['0188']],
		'PHPStan\Type\Constant\OversizedArrayBuilder' => [['0189']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0190',
				'0191',
				'0193',
				'0195',
				'0198',
				'0200',
				'0201',
				'0202',
				'0203',
				'0204',
				'0207',
				'0209',
				'0210',
				'0213',
				'0214',
				'0215',
				'0218',
				'0221',
				'0222',
				'0223',
				'0225',
				'0227',
				'0228',
				'0229',
				'0230',
				'0231',
				'0233',
				'0234',
				'0235',
				'0237',
				'0242',
				'0243',
				'0246',
				'0248',
				'0249',
				'0250',
				'0251',
				'0252',
				'0253',
				'0255',
				'0260',
				'0261',
				'0263',
				'0264',
				'0265',
				'0266',
				'0267',
				'0269',
				'0271',
				'0273',
				'0274',
				'0276',
				'0279',
				'0280',
				'0281',
				'0284',
				'0285',
				'0286',
				'0287',
				'0289',
				'0290',
				'0291',
				'0293',
				'0294',
				'0295',
				'0296',
				'0298',
				'0299',
				'0300',
				'0301',
				'0302',
				'0305',
				'0309',
				'0310',
				'0311',
				'0312',
				'0313',
				'0314',
				'0315',
				'0317',
				'0318',
				'0322',
				'0325',
				'0326',
				'0329',
				'0331',
				'0334',
				'0336',
				'0337',
				'0338',
				'0339',
				'0341',
				'0342',
				'0343',
				'0344',
				'0346',
				'0347',
				'0348',
				'0350',
				'0351',
				'0354',
				'0357',
				'0358',
			],
		],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0190']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0191']],
		'PHPStan\Type\Php\DateFunctionReturnTypeHelper' => [['0192']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0193']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0194',
				'0208',
				'0211',
				'0212',
				'0219',
				'0224',
				'0247',
				'0254',
				'0257',
				'0258',
				'0282',
				'0292',
				'0297',
				'0303',
				'0319',
				'0323',
				'0324',
				'0332',
				'0335',
				'0352',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0194',
				'0208',
				'0211',
				'0212',
				'0219',
				'0224',
				'0247',
				'0254',
				'0257',
				'0258',
				'0282',
				'0292',
				'0297',
				'0303',
				'0314',
				'0319',
				'0323',
				'0324',
				'0332',
				'0335',
				'0352',
				'0356',
			],
		],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0194']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0195']],
		'PHPStan\Type\Php\RegexArrayShapeMatcher' => [['0196']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [
			['0197', '0217', '0272', '0283', '0321', '0328', '0330', '0353'],
		],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0197']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0198']],
		'PHPStan\Type\OperatorTypeSpecifyingExtension' => [['0199']],
		'PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension' => [['0199']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0200']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0201']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0202']],
		'PHPStan\Type\Php\ArrayFirstLastDynamicReturnTypeExtension' => [['0203']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0204']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [
			['0205', '0206', '0220', '0245', '0278', '0288', '0320', '0345'],
		],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0205']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0206']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0207']],
		'PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension' => [['0208']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0209']],
		'PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension' => [['0210']],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0211']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0212']],
		'PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension' => [['0213']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0214']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0215']],
		'PHPStan\Type\Php\IdateFunctionReturnTypeHelper' => [['0216']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0217']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0218']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0219']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0220']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0221']],
		'PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension' => [['0222']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0223']],
		'PHPStan\Type\Php\PregMatchTypeSpecifyingExtension' => [['0224']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0225']],
		'PHPStan\Type\Php\DateFormatMethodReturnTypeExtension' => [['0226']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0227']],
		'PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension' => [['0228']],
		'PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension' => [['0229']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0230']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension' => [['0231']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0232']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0233']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0234']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0235']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['0236', '0695', '0696', '0698']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0236']],
		'PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension' => [['0237']],
		'PHPStan\Type\Php\FilterFunctionReturnTypeHelper' => [['0238']],
		'PHPStan\Type\Php\ArrayColumnHelper' => [['0239']],
		'PHPStan\Type\FunctionParameterClosureTypeExtension' => [['0240']],
		'PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension' => [['0240']],
		'PHPStan\Type\FunctionParameterOutTypeExtension' => [['0241', '0327', '0355']],
		'PHPStan\Type\Php\ParseStrParameterOutTypeExtension' => [['0241']],
		'PHPStan\Type\Php\LtrimFunctionReturnTypeExtension' => [['0242']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0243']],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0244']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0245']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0246']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0247']],
		'PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension' => [['0248']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0249']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0250']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0251']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0252']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0253']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0254']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0255']],
		'PHPStan\Type\DynamicMethodThrowTypeExtension' => [['0256', '0259', '0308']],
		'PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension' => [['0256']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0257']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0258']],
		'PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension' => [['0259']],
		'PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension' => [['0260']],
		'PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension' => [['0261']],
		'PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension' => [['0262']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0263']],
		'PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension' => [['0264']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0265']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0266']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0267']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0268', '0270', '0304', '0333', '0349']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicThrowTypeExtension' => [['0268']],
		'PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension' => [['0269']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0270']],
		'PHPStan\Type\Php\IdateFunctionReturnTypeExtension' => [['0271']],
		'PHPStan\Type\Php\ClosureGetCurrentDynamicReturnTypeExtension' => [['0272']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0273']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0274']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper' => [['0275']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0276']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0277']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0278']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0279']],
		'PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension' => [['0280']],
		'PHPStan\Type\Php\IniGetReturnTypeExtension' => [['0281']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0282']],
		'PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension' => [['0283']],
		'PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension' => [['0284']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0285']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0286']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0287']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0288']],
		'PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension' => [['0289']],
		'PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension' => [['0290']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['0291']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0292']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0293']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0294']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0295']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0296']],
		'PHPStan\Type\Php\StrContainingTypeSpecifyingExtension' => [['0297']],
		'PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension' => [['0298']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0299']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0300']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0301']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0302']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0303']],
		'PHPStan\Type\Php\FilterVarThrowTypeExtension' => [['0304']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0305']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper' => [['0306']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0307']],
		'PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension' => [['0308']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0309']],
		'PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension' => [['0310']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0311']],
		'PHPStan\Type\Php\GettypeFunctionReturnTypeExtension' => [['0312']],
		'PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension' => [['0313']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0314']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0315']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0316']],
		'PHPStan\Type\Php\StrrevFunctionReturnTypeExtension' => [['0317']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0318']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0319']],
		'PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension' => [['0320']],
		'PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension' => [['0321']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0322']],
		'PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension' => [['0323']],
		'PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension' => [['0324']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0325']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0326']],
		'PHPStan\Type\Php\PregMatchParameterOutTypeExtension' => [['0327']],
		'PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension' => [['0328']],
		'PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension' => [['0329']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0330']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0331']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0332']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0333']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0334']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0335']],
		'PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension' => [['0336']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0337']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0338']],
		'PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension' => [['0339']],
		'PHPStan\Type\Php\ConstantHelper' => [['0340']],
		'PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension' => [['0341']],
		'PHPStan\Type\Php\RoundFunctionReturnTypeExtension' => [['0342']],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0343']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0344']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0345']],
		'PHPStan\Type\Php\ConstantFunctionReturnTypeExtension' => [['0346']],
		'PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension' => [['0347']],
		'PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension' => [['0348']],
		'PHPStan\Type\Php\AssertThrowTypeExtension' => [['0349']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0350']],
		'PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension' => [['0351']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0352']],
		'PHPStan\Type\Php\PDOConnectReturnTypeExtension' => [['0353']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0354']],
		'PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension' => [['0355']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0356']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0356']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0357']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0358']],
		'PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension' => [['0359']],
		'PHPStan\Type\FileTypeMapper' => [0 => ['0360'], 2 => [1 => 'stubFileTypeMapper']],
		'PHPStan\Process\CpuCoreCounter' => [['0361']],
		'PHPStan\DependencyInjection\Container' => [['0365'], ['0362']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['0362']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['0363']],
		'PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider' => [['0363']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['0364']],
		'PHPStan\DependencyInjection\MemoizingContainer' => [['0365']],
		'PHPStan\DependencyInjection\Type\ParameterClosureTypeExtensionProvider' => [['0366']],
		'PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider' => [['0366']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['0367']],
		'PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider' => [['0367']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['0368']],
		'PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider' => [['0368']],
		'PHPStan\DependencyInjection\Type\ParameterOutTypeExtensionProvider' => [['0369']],
		'PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider' => [['0369']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['0370']],
		'PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider' => [['0370']],
		'PHPStan\DependencyInjection\Type\ParameterClosureThisExtensionProvider' => [['0371']],
		'PHPStan\DependencyInjection\Type\LazyParameterClosureThisExtensionProvider' => [['0371']],
		'PHPStan\DependencyInjection\Type\ExpressionTypeResolverExtensionRegistryProvider' => [['0372']],
		'PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider' => [['0372']],
		'PHPStan\Collectors\RegistryFactory' => [['0373']],
		'PHPStan\Collectors\Registry' => [['0374']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['0375']],
		'PHPStan\Php\PhpVersionFactory' => [['0376']],
		'PHPStan\Php\PhpVersion' => [['0377']],
		'PHPStan\Php\ComposerPhpVersionFactory' => [['0378']],
		'PHPStan\Parallel\ParallelAnalyser' => [['0379']],
		'PHPStan\Diagnose\DiagnoseExtension' => [0 => ['0380'], 2 => [1 => 'phpstanDiagnoseExtension']],
		'PHPStan\Parallel\Scheduler' => [['0380']],
		'PHPStan\File\SimpleRelativePathHelper' => [2 => ['simpleRelativePathHelper']],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [0 => ['reflectionProvider'], 2 => ['betterReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'PHPStan\File\FileExcluderRawFactory' => [['0381']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['0382']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['0383']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['0384']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['0385']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['0386']],
		'PHPStan\Analyser\InternalScopeFactoryFactory' => [['0387']],
		'PHPStan\Rules\Operators\InvalidUnaryOperationRule' => [['0388']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0389']],
		'PHPStan\Rules\Operators\InvalidComparisonOperationRule' => [['0390']],
		'PHPStan\Rules\Operators\PipeOperatorRule' => [['0391']],
		'PHPStan\Rules\Operators\BacktickRule' => [['0392']],
		'PHPStan\Rules\Operators\InvalidAssignVarRule' => [['0393']],
		'PHPStan\Rules\Operators\InvalidBinaryOperationRule' => [['0394']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0395']],
		'PHPStan\Rules\Properties\PropertiesInInterfaceRule' => [['0396']],
		'PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule' => [['0397']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule' => [['0398']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0399']],
		'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [['0400']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0401']],
		'PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule' => [['0402']],
		'PHPStan\Rules\Properties\PropertyAssignRefRule' => [['0403']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule' => [['0404']],
		'PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule' => [['0405']],
		'PHPStan\Rules\Properties\NullsafePropertyFetchRule' => [['0406']],
		'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [['0407']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule' => [['0408']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule' => [['0409']],
		'PHPStan\Rules\Properties\PropertyHookAttributesRule' => [['0410']],
		'PHPStan\Rules\Properties\PropertyAttributesRule' => [['0411']],
		'PHPStan\Rules\Properties\SetPropertyHookParameterRule' => [['0412']],
		'PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule' => [['0413']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule' => [['0414']],
		'PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule' => [['0415']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0416']],
		'PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule' => [['0417']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [['0418']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyRule' => [['0419']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0420']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule' => [['0421']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [['0422']],
		'PHPStan\Rules\Properties\OverridingPropertyRule' => [['0423']],
		'PHPStan\Rules\Properties\PropertyInClassRule' => [['0424']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['0425']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule' => [['0426']],
		'PHPStan\Rules\Comparison\BooleanOrConstantConditionRule' => [['0427']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule' => [['0428']],
		'PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule' => [['0429']],
		'PHPStan\Rules\Comparison\BooleanNotConstantConditionRule' => [['0430']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule' => [['0431']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule' => [['0432']],
		'PHPStan\Rules\Comparison\MatchExpressionRule' => [['0433']],
		'PHPStan\Rules\Comparison\ConstantLooseComparisonRule' => [['0434']],
		'PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule' => [['0435']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule' => [['0436']],
		'PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule' => [['0437']],
		'PHPStan\Rules\Comparison\IfConstantConditionRule' => [['0438']],
		'PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule' => [['0439']],
		'PHPStan\Rules\Comparison\ElseIfConstantConditionRule' => [['0440']],
		'PHPStan\Rules\Comparison\BooleanAndConstantConditionRule' => [['0441']],
		'PHPStan\Rules\Comparison\LogicalXorConstantConditionRule' => [['0442']],
		'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [['0443']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0444']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0445']],
		'PHPStan\Rules\Pure\PureMethodRule' => [['0446']],
		'PHPStan\Rules\Pure\PureFunctionRule' => [['0447']],
		'PHPStan\Rules\Cast\VoidCastRule' => [['0448']],
		'PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule' => [['0449']],
		'PHPStan\Rules\Cast\PrintRule' => [['0450']],
		'PHPStan\Rules\Cast\InvalidCastRule' => [['0451']],
		'PHPStan\Rules\Cast\DeprecatedCastRule' => [['0452']],
		'PHPStan\Rules\Cast\EchoRule' => [['0453']],
		'PHPStan\Rules\Cast\UnsetCastRule' => [['0454']],
		'PHPStan\Rules\Generators\YieldTypeRule' => [['0455']],
		'PHPStan\Rules\Generators\YieldInGeneratorRule' => [['0456']],
		'PHPStan\Rules\Generators\YieldFromTypeRule' => [['0457']],
		'PHPStan\Rules\Variables\ParameterOutAssignedTypeRule' => [['0458']],
		'PHPStan\Rules\Variables\EmptyRule' => [['0459']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0460']],
		'PHPStan\Rules\Variables\NullCoalesceRule' => [['0461']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0462']],
		'PHPStan\Rules\Variables\IssetRule' => [['0463']],
		'PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule' => [['0464']],
		'PHPStan\Rules\Variables\VariableCloningRule' => [['0465']],
		'PHPStan\Rules\Variables\UnsetRule' => [['0466']],
		'PHPStan\Rules\DeadCode\UnusedPrivateConstantRule' => [['0467']],
		'PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule' => [['0468']],
		'PHPStan\Rules\DeadCode\NoopRule' => [['0469']],
		'PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule' => [['0470']],
		'PHPStan\Rules\DeadCode\UnusedPrivateMethodRule' => [['0471']],
		'PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule' => [['0472']],
		'PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule' => [['0473']],
		'PHPStan\Rules\DeadCode\UnreachableStatementRule' => [['0474']],
		'PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule' => [['0475']],
		'PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule' => [['0476']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [['0477']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0478']],
		'PHPStan\Rules\Functions\RedefinedParametersRule' => [['0479']],
		'PHPStan\Rules\Functions\ReturnNullsafeByRefRule' => [['0480']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [['0481']],
		'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [['0482']],
		'PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule' => [['0483']],
		'PHPStan\Rules\Functions\PrintfArrayParametersRule' => [['0484']],
		'PHPStan\Rules\Functions\ReturnTypeRule' => [['0485']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [['0486']],
		'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [['0487']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule' => [['0488']],
		'PHPStan\Rules\Functions\FunctionCallableRule' => [['0489']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [['0490']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [['0491']],
		'PHPStan\Rules\Functions\CallCallablesRule' => [['0492']],
		'PHPStan\Rules\Functions\CallToFunctionStatementWithNoDiscardRule' => [['0493']],
		'PHPStan\Rules\Functions\UselessFunctionReturnValueRule' => [['0494']],
		'PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule' => [['0495']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule' => [['0496']],
		'PHPStan\Rules\Functions\ParamAttributesRule' => [['0497']],
		'PHPStan\Rules\Functions\ArrowFunctionAttributesRule' => [['0498']],
		'PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule' => [['0499']],
		'PHPStan\Rules\Functions\DefineParametersRule' => [['0500']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [['0501']],
		'PHPStan\Rules\Functions\FunctionAttributesRule' => [['0502']],
		'PHPStan\Rules\Functions\ClosureAttributesRule' => [['0503']],
		'PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule' => [['0504']],
		'PHPStan\Rules\Functions\VariadicParametersDeclarationRule' => [['0505']],
		'PHPStan\Rules\Keywords\RequireFileExistsRule' => [['0506']],
		'PHPStan\Rules\Keywords\DeclareStrictTypesRule' => [['0507']],
		'PHPStan\Rules\Keywords\ContinueBreakInLoopRule' => [['0508']],
		'PHPStan\Rules\Generics\MethodSignatureVarianceRule' => [['0509']],
		'PHPStan\Rules\Generics\InterfaceAncestorsRule' => [['0510']],
		'PHPStan\Rules\Generics\UsedTraitsRule' => [['0511']],
		'PHPStan\Rules\Generics\ClassAncestorsRule' => [['0512']],
		'PHPStan\Rules\Generics\FunctionTemplateTypeRule' => [['0513']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule' => [['0514']],
		'PHPStan\Rules\Generics\TraitTemplateTypeRule' => [['0515']],
		'PHPStan\Rules\Generics\EnumAncestorsRule' => [['0516']],
		'PHPStan\Rules\Generics\MethodTemplateTypeRule' => [['0517']],
		'PHPStan\Rules\Generics\ClassTemplateTypeRule' => [['0518']],
		'PHPStan\Rules\Generics\PropertyVarianceRule' => [['0519']],
		'PHPStan\Rules\Generics\FunctionSignatureVarianceRule' => [['0520']],
		'PHPStan\Rules\Generics\InterfaceTemplateTypeRule' => [['0521']],
		'PHPStan\Rules\Generics\EnumTemplateTypeRule' => [['0522']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeRule' => [['0523']],
		'PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule' => [['0524']],
		'PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule' => [['0525']],
		'PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule' => [['0526']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['0527']],
		'PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule' => [['0528']],
		'PHPStan\Rules\Methods\ReturnTypeRule' => [['0529']],
		'PHPStan\Rules\Methods\ConstructorReturnTypeRule' => [['0530']],
		'PHPStan\Rules\Methods\MethodCallableRule' => [['0531']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [['0532']],
		'PHPStan\Rules\Methods\AbstractPrivateMethodRule' => [['0533']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0534']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [['0535']],
		'PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule' => [['0536']],
		'PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule' => [['0537']],
		'PHPStan\Rules\Methods\CallToMethodStatementWithNoDiscardRule' => [['0538']],
		'PHPStan\Rules\Methods\ConsistentConstructorRule' => [['0539']],
		'PHPStan\Rules\Methods\StaticMethodCallableRule' => [['0540']],
		'PHPStan\Rules\Methods\NullsafeMethodCallRule' => [['0541']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['0542']],
		'PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule' => [['0543']],
		'PHPStan\Rules\Methods\MethodAttributesRule' => [['0544']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [['0545']],
		'PHPStan\Rules\Methods\CallToStaticMethodStatementWithNoDiscardRule' => [['0546']],
		'PHPStan\Rules\Methods\ConsistentConstructorDeclarationRule' => [['0547']],
		'PHPStan\Rules\Methods\FinalPrivateMethodRule' => [['0548']],
		'PHPStan\Rules\Constants\NativeTypedClassConstantRule' => [['0549']],
		'PHPStan\Rules\Constants\MagicConstantContextRule' => [['0550']],
		'PHPStan\Rules\Constants\OverridingConstantRule' => [['0551']],
		'PHPStan\Rules\Constants\FinalConstantRule' => [['0552']],
		'PHPStan\Rules\Constants\ConstantRule' => [['0553']],
		'PHPStan\Rules\Constants\ClassAsClassConstantRule' => [['0554']],
		'PHPStan\Rules\Constants\ValueAssignedToClassConstantRule' => [['0555']],
		'PHPStan\Rules\Constants\FinalPrivateConstantRule' => [['0556']],
		'PHPStan\Rules\Constants\DynamicClassConstantFetchRule' => [['0557']],
		'PHPStan\Rules\Constants\ConstantAttributesRule' => [['0558']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule' => [['0559']],
		'PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule' => [['0560']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule' => [['0561']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule' => [['0562']],
		'PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule' => [['0563']],
		'PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule' => [['0564']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule' => [['0565']],
		'PHPStan\Rules\Types\InvalidTypesInUnionRule' => [['0566']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0567']],
		'PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule' => [['0568']],
		'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [['0569']],
		'PHPStan\Rules\Classes\ReadOnlyClassRule' => [['0570']],
		'PHPStan\Rules\Classes\AllowedSubTypesRule' => [['0571']],
		'PHPStan\Rules\Classes\TraitAttributeClassRule' => [['0572']],
		'PHPStan\Rules\Classes\PropertyTagTraitRule' => [['0573']],
		'PHPStan\Rules\Classes\PropertyTagRule' => [['0574']],
		'PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule' => [['0575']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [['0576']],
		'PHPStan\Rules\Classes\RequireImplementsRule' => [['0577']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [['0578']],
		'PHPStan\Rules\Classes\RequireExtendsRule' => [['0579']],
		'PHPStan\Rules\Classes\NewStaticRule' => [['0580']],
		'PHPStan\Rules\Classes\MethodTagRule' => [['0581']],
		'PHPStan\Rules\Classes\MethodTagTraitUseRule' => [['0582']],
		'PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule' => [['0583']],
		'PHPStan\Rules\Classes\ClassConstantAttributesRule' => [['0584']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [['0585']],
		'PHPStan\Rules\Classes\LocalTypeAliasesRule' => [['0586']],
		'PHPStan\Rules\Classes\InstantiationCallableRule' => [['0587']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [['0588']],
		'PHPStan\Rules\Classes\InvalidPromotedPropertiesRule' => [['0589']],
		'PHPStan\Rules\Classes\InstantiationRule' => [['0590']],
		'PHPStan\Rules\Classes\ClassAttributesRule' => [['0591']],
		'PHPStan\Rules\Classes\MixinRule' => [['0592']],
		'PHPStan\Rules\Classes\MixinTraitRule' => [['0593']],
		'PHPStan\Rules\Classes\MethodTagTraitRule' => [['0594']],
		'PHPStan\Rules\Classes\MixinTraitUseRule' => [['0595']],
		'PHPStan\Rules\Classes\PropertyTagTraitUseRule' => [['0596']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [['0597']],
		'PHPStan\Rules\Classes\NonClassAttributeClassRule' => [['0598']],
		'PHPStan\Rules\Classes\LocalTypeTraitAliasesRule' => [['0599']],
		'PHPStan\Rules\Classes\ImpossibleInstanceOfRule' => [['0600']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [['0601']],
		'PHPStan\Rules\Classes\EnumSanityRule' => [['0602']],
		'PHPStan\Rules\PhpDoc\SealedDefinitionClassRule' => [['0603']],
		'PHPStan\Rules\PhpDoc\FunctionAssertRule' => [['0604']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule' => [['0605']],
		'PHPStan\Rules\PhpDoc\SealedDefinitionTraitRule' => [['0606']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule' => [['0607']],
		'PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule' => [['0608']],
		'PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule' => [['0609']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule' => [['0610']],
		'PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule' => [['0611']],
		'PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule' => [['0612']],
		'PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule' => [['0613']],
		'PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule' => [['0614']],
		'PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule' => [['0615']],
		'PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule' => [['0616']],
		'PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule' => [['0617']],
		'PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule' => [['0618']],
		'PHPStan\Rules\PhpDoc\MethodAssertRule' => [['0619']],
		'PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule' => [['0620']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule' => [['0621']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule' => [['0622']],
		'PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule' => [['0623']],
		'PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule' => [['0624']],
		'PHPStan\Rules\Api\RuntimeReflectionFunctionRule' => [['0625']],
		'PHPStan\Rules\Api\ApiClassConstFetchRule' => [['0626']],
		'PHPStan\Rules\Api\ApiInstanceofTypeRule' => [['0627']],
		'PHPStan\Rules\Api\OldPhpParser4ClassRule' => [['0628']],
		'PHPStan\Rules\Api\RuntimeReflectionInstantiationRule' => [['0629']],
		'PHPStan\Rules\Api\ApiInstantiationRule' => [['0630']],
		'PHPStan\Rules\Api\ApiInterfaceExtendsRule' => [['0631']],
		'PHPStan\Rules\Api\GetTemplateTypeRule' => [['0632']],
		'PHPStan\Rules\Api\ApiClassExtendsRule' => [['0633']],
		'PHPStan\Rules\Api\ApiMethodCallRule' => [['0634']],
		'PHPStan\Rules\Api\ApiStaticCallRule' => [['0635']],
		'PHPStan\Rules\Api\ApiClassImplementsRule' => [['0636']],
		'PHPStan\Rules\Api\ApiTraitUseRule' => [['0637']],
		'PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule' => [['0638']],
		'PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule' => [['0639']],
		'PHPStan\Rules\Api\ApiInstanceofRule' => [['0640']],
		'PHPStan\Rules\Exceptions\NoncapturingCatchRule' => [['0641']],
		'PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule' => [['0642']],
		'PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule' => [['0643']],
		'PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule' => [['0644']],
		'PHPStan\Rules\Exceptions\ThrowExprTypeRule' => [['0645']],
		'PHPStan\Rules\Exceptions\ThrowExpressionRule' => [['0646']],
		'PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule' => [['0647']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0648']],
		'PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule' => [['0649']],
		'PHPStan\Rules\Names\UsedNamesRule' => [['0650']],
		'PHPStan\Rules\Traits\ConflictingTraitConstantsRule' => [['0651']],
		'PHPStan\Rules\Traits\TraitAttributesRule' => [['0652']],
		'PHPStan\Rules\Traits\ConstantsInTraitsRule' => [['0653']],
		'PHPStan\Rules\Traits\NotAnalysedTraitRule' => [['0654']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0655']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignOpRule' => [['0656']],
		'PHPStan\Rules\Arrays\DeadForeachRule' => [['0657']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [['0658']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [['0659']],
		'PHPStan\Rules\Arrays\UnpackIterableInArrayRule' => [['0660']],
		'PHPStan\Rules\Arrays\IterableInForeachRule' => [['0661']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [['0662']],
		'PHPStan\Rules\Arrays\ArrayDestructuringRule' => [['0663']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule' => [['0664']],
		'PHPStan\Rules\Arrays\ArrayUnpackingRule' => [['0665']],
		'PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule' => [['0666']],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [['0667']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignmentRule' => [['0668']],
		'PHPStan\Rules\Ignore\IgnoreParseErrorRule' => [['0669']],
		'PHPStan\Rules\EnumCases\EnumCaseAttributesRule' => [['0670']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['0671']],
		'PHPStan\Collectors\Collector' => [1 => ['0672', '0673', '0674', '0675', '0676', '0677', '0678', '0679', '0680']],
		'PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector' => [['0672']],
		'PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector' => [['0673']],
		'PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector' => [['0674']],
		'PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector' => [['0675']],
		'PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector' => [['0676']],
		'PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector' => [['0677']],
		'PHPStan\Rules\DeadCode\PossiblyPureNewCollector' => [['0678']],
		'PHPStan\Rules\Traits\TraitDeclarationCollector' => [['0679']],
		'PHPStan\Rules\Traits\TraitUseCollector' => [['0680']],
		'PhpParser\BuilderFactory' => [['0681']],
		'PhpParser\NodeVisitor\NameResolver' => [['0682']],
		'PHPStan\PhpDocParser\ParserConfig' => [['0683']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['0684']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['0685']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['0686']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['0687']],
		'PHPStan\PhpDocParser\Printer\Printer' => [['0688']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0689', '0690']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0689']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0690']],
		'PHPStan\BetterReflection\Reflector\DefaultReflector' => [2 => ['originalBetterReflectionReflector']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['0691']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['0692']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['0693']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['0694', '0697', '0699', '0700']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['0694']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['0695']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['0696']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['0697']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['0698']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['0699']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension' => [['0700']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension' => [['0701']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0702']],
		'PHPStan\Diagnose\PHPStanDiagnoseExtension' => [2 => ['phpstanDiagnoseExtension']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0703', '0704', '0705', '0706', '0707']],
		'PHPStan\Type\Php\DateTimeModifyReturnTypeExtension' => [['0708', '0709']],
		'PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension' => [['0710', '0711']],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension' => [
			['0712', '0713'],
		],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [2 => ['betterReflectionSourceLocator']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'php8Parser',
				'currentPhpVersionSimpleDirectParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionRichParser',
				'pathRoutingParser',
				'defaultAnalysisParser',
				'freshStubParser',
				'stubParser',
			],
		],
		'PHPStan\Parser\SimpleParser' => [2 => ['php8Parser', 'currentPhpVersionSimpleDirectParser']],
		'PhpParser\Lexer' => [2 => ['php8Lexer', 'currentPhpVersionLexer']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['php8PhpParser', 'currentPhpVersionPhpParser']],
		'PhpParser\Parser' => [2 => ['php8PhpParser', 'currentPhpVersionPhpParser', 'phpParserDecorator']],
		'PhpParser\Parser\Php8' => [2 => ['php8PhpParser']],
		'PHPStan\Parser\PhpParserFactory' => [2 => ['currentPhpVersionPhpParserFactory']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser', 'stubParser']],
		'PHPStan\Parser\StubParser' => [2 => ['freshStubParser']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['0714']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['0715']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule' => [['0716']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0717']],
		'PHPStan\Rules\Exceptions\MethodThrowTypeCovarianceRule' => [['0718']],
		'PHPStan\Rules\Classes\NewStaticInAbstractClassStaticMethodRule' => [['0719']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageExtension' => [['0720']],
		'PHPStan\Rules\InternalTag\RestrictedInternalClassConstantUsageExtension' => [['0720']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassNameUsageExtension' => [['0721']],
		'PHPStan\Rules\InternalTag\RestrictedInternalClassNameUsageExtension' => [['0721']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageExtension' => [['0722']],
		'PHPStan\Rules\InternalTag\RestrictedInternalFunctionUsageExtension' => [['0722']],
		'PHPStan\Rules\Variables\AssignToByRefExprFromForeachRule' => [['0723']],
		'PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageExtension' => [['0724']],
		'PHPStan\Rules\InternalTag\RestrictedInternalPropertyUsageExtension' => [['0724']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageExtension' => [['0725']],
		'PHPStan\Rules\InternalTag\RestrictedInternalMethodUsageExtension' => [['0725']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['0726']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['0727']],
		'PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule' => [['0728']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('0691'));
	}


	public function createService02(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('0360'),
			$this->getService('070')
		);
	}


	public function createService03(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('05'),
			$this->getService('reflectionProvider'),
			$this->getService('02'),
			$this->getService('0360')
		);
	}


	public function createService04(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory($this->getService('0381'), ['analyseAndScan' => [], 'analyse' => []]);
	}


	public function createService05(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/Users/didou/dev/machour/clictopay');
	}


	public function createService06(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor(
			$this->getService('fileFinderAnalyse'),
			$this->getService('fileFinderScan'),
			$this->getParameter('analysedPaths'),
			$this->getParameter('analysedPathsFromConfig'),
			[],
			[]
		);
	}


	public function createService07(): PHPStan\Reflection\InitializerExprTypeResolver
	{
		return new PHPStan\Reflection\InitializerExprTypeResolver(
			$this->getService('059'),
			$this->getService('028'),
			$this->getService('0377'),
			$this->getService('0368'),
			$this->getService('0189'),
			false
		);
	}


	public function createService08(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider(
			$this->getService('013'),
			$this->getService('07'),
			$this->getService('0377'),
			false
		);
	}


	public function createService09(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('08'),
			$this->getService('018'),
			$this->getService('0360'),
			$this->getService('0377'),
			$this->getService('07'),
			$this->getService('028')
		);
	}


	public function createService010(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('011')->create();
	}


	public function createService011(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('0377'),
			$this->getService('08'),
			$this->getService('09')
		);
	}


	public function createService012(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('010'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0360'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('024')
		);
	}


	public function createService013(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('0104'));
	}


	public function createService014(): PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory(
			$this->getService('069'),
			$this->getService('0377')
		);
	}


	public function createService015(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('069'),
			$this->getService('0377')
		);
	}


	public function createService016(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0689'),
			$this->getService('0690'),
			$this->getService('022'),
			$this->getService('020'),
			$this->getService('019'),
			$this->getService('0383'),
			$this->getService('018'),
			[],
			[],
			$this->getParameter('analysedPaths'),
			['/Users/didou/dev/machour/clictopay'],
			$this->getParameter('analysedPathsFromConfig'),
			false,
			$this->getParameter('singleReflectionFile')
		);
	}


	public function createService017(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService018(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('0692'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService019(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('020'),
			$this->getService('0383'),
			$this->getService('021'),
			$this->getService('0377')
		);
	}


	public function createService020(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('021'));
	}


	public function createService021(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('018'),
			$this->getService('fileFinderScan'),
			$this->getService('0377'),
			$this->getService('063')
		);
	}


	public function createService022(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('0382'));
	}


	public function createService023(): PHPStan\Reflection\Deprecation\DeprecationProvider
	{
		return new PHPStan\Reflection\Deprecation\DeprecationProvider($this->getService('0365'));
	}


	public function createService024(): PHPStan\Reflection\AttributeReflectionFactory
	{
		return new PHPStan\Reflection\AttributeReflectionFactory($this->getService('07'), $this->getService('028'));
	}


	public function createService025(): PHPStan\Reflection\ConstructorsHelper
	{
		return new PHPStan\Reflection\ConstructorsHelper($this->getService('0365'), []);
	}


	public function createService026(): PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension;
	}


	public function createService027(): PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension;
	}


	public function createService028(): PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('0365'));
	}


	public function createService029(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser(
			$this->getService('056'),
			$this->getService('registry'),
			$this->getService('0374'),
			$this->getService('055'),
			50
		);
	}


	public function createService030(): PHPStan\Analyser\RuleErrorTransformer
	{
		return new PHPStan\Analyser\RuleErrorTransformer($this->getService('currentPhpVersionPhpParser'));
	}


	public function createService031(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer('/Users/didou/dev/machour/clictopay/build/phpstan/resultCache.php');
	}


	public function createService032(): PHPStan\Analyser\LocalIgnoresProcessor
	{
		return new PHPStan\Analyser\LocalIgnoresProcessor;
	}


	public function createService033(): PHPStan\Analyser\Generator\LazyInternalGeneratorScopeFactory
	{
		return new PHPStan\Analyser\Generator\LazyInternalGeneratorScopeFactory($this->getService('0365'));
	}


	public function createService034(): PHPStan\Analyser\Generator\StmtHandler\NamespaceHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\NamespaceHandler;
	}


	public function createService035(): PHPStan\Analyser\Generator\StmtHandler\UseHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\UseHandler;
	}


	public function createService036(): PHPStan\Analyser\Generator\StmtHandler\DeclareHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\DeclareHandler;
	}


	public function createService037(): PHPStan\Analyser\Generator\StmtHandler\ClassMethodHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\ClassMethodHandler;
	}


	public function createService038(): PHPStan\Analyser\Generator\StmtHandler\ClassLikeHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\ClassLikeHandler;
	}


	public function createService039(): PHPStan\Analyser\Generator\StmtHandler\ReturnHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\ReturnHandler;
	}


	public function createService040(): PHPStan\Analyser\Generator\StmtHandler\ExpressionHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\ExpressionHandler;
	}


	public function createService041(): PHPStan\Analyser\Generator\StmtHandler\NopHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\NopHandler;
	}


	public function createService042(): PHPStan\Analyser\Generator\GeneratorScopeFactory
	{
		return new PHPStan\Analyser\Generator\GeneratorScopeFactory($this->getService('033'));
	}


	public function createService043(): PHPStan\Analyser\Generator\ExprHandler\CastIntHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\CastIntHandler;
	}


	public function createService044(): PHPStan\Analyser\Generator\ExprHandler\FuncCallHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\FuncCallHandler($this->getService('reflectionProvider'));
	}


	public function createService045(): PHPStan\Analyser\Generator\ExprHandler\AssignHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\AssignHandler;
	}


	public function createService046(): PHPStan\Analyser\Generator\ExprHandler\MethodCallHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\MethodCallHandler;
	}


	public function createService047(): PHPStan\Analyser\Generator\ExprHandler\NewHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\NewHandler;
	}


	public function createService048(): PHPStan\Analyser\Generator\ExprHandler\ClosureHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ClosureHandler;
	}


	public function createService049(): PHPStan\Analyser\Generator\ExprHandler\ScalarIntHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ScalarIntHandler;
	}


	public function createService050(): PHPStan\Analyser\Generator\ExprHandler\ClassConstFetchHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ClassConstFetchHandler;
	}


	public function createService051(): PHPStan\Analyser\Generator\ExprHandler\ScalarStringHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ScalarStringHandler;
	}


	public function createService052(): PHPStan\Analyser\Generator\ExprHandler\VariableHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\VariableHandler;
	}


	public function createService053(): PHPStan\Analyser\IgnoreErrorExtensionProvider
	{
		return new PHPStan\Analyser\IgnoreErrorExtensionProvider($this->getService('0365'));
	}


	public function createService054(): PHPStan\Analyser\RicherScopeGetTypeHelper
	{
		return new PHPStan\Analyser\RicherScopeGetTypeHelper($this->getService('07'), $this->getService('0113'));
	}


	public function createService055(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('07'),
			$this->getService('nodeScopeResolverReflector'),
			$this->getService('0363'),
			$this->getService('0369'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0360'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0377'),
			$this->getService('010'),
			$this->getService('023'),
			$this->getService('024'),
			$this->getService('0106'),
			$this->getService('05'),
			$this->getService('typeSpecifier'),
			$this->getService('0367'),
			$this->getService('0111'),
			$this->getService('0371'),
			$this->getService('0366'),
			$this->getService('057'),
			true,
			true,
			true,
			[],
			[],
			['stdClass'],
			true,
			true
		);
	}


	public function createService056(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('057'),
			$this->getService('042'),
			$this->getService('055'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('03'),
			$this->getService('053'),
			$this->getService('030'),
			$this->getService('032')
		);
	}


	public function createService057(): PHPStan\Analyser\ScopeFactory
	{
		return new PHPStan\Analyser\ScopeFactory($this->getService('0387'));
	}


	public function createService058(): PHPStan\Analyser\AnalyserResultFinalizer
	{
		return new PHPStan\Analyser\AnalyserResultFinalizer(
			$this->getService('registry'),
			$this->getService('053'),
			$this->getService('030'),
			$this->getService('057'),
			$this->getService('032'),
			true
		);
	}


	public function createService059(): PHPStan\Analyser\ConstantResolver
	{
		return $this->getService('062')->create();
	}


	public function createService060(): PHPStan\Analyser\Ignore\IgnoreLexer
	{
		return new PHPStan\Analyser\Ignore\IgnoreLexer;
	}


	public function createService061(): PHPStan\Analyser\Ignore\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\Ignore\IgnoredErrorHelper($this->getService('05'), [], true);
	}


	public function createService062(): PHPStan\Analyser\ConstantResolverFactory
	{
		return new PHPStan\Analyser\ConstantResolverFactory($this->getService('028'), $this->getService('0365'));
	}


	public function createService063(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService064(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('06'),
			$this->getService('061'),
			$this->getService('0101'),
			$this->getParameter('analysedPaths'),
			'/Users/didou/dev/machour/clictopay',
			($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
			['1.1.1.2'],
			['/Users/didou/dev/machour/clictopay'],
			[
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/Users/didou/dev/machour/clictopay/phpstan.neon',
			],
			null,
			[
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
			],
			null,
			'4'
		);
	}


	public function createService065(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('0380'),
			$this->getService('029'),
			$this->getService('0379'),
			$this->getService('0361')
		);
	}


	public function createService066(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('065'),
			$this->getService('058'),
			$this->getService('099'),
			$this->getService('0386'),
			$this->getService('061'),
			$this->getService('0101')
		);
	}


	public function createService067(): PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter(
			$this->getService('errorFormatter.github'),
			$this->getService('errorFormatter.teamcity')
		);
	}


	public function createService068(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('05'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService069(): PHPStan\Node\Printer\Printer
	{
		return new PHPStan\Node\Printer\Printer;
	}


	public function createService070(): PHPStan\Node\Printer\ExprPrinter
	{
		return new PHPStan\Node\Printer\ExprPrinter($this->getService('069'));
	}


	public function createService071(): PHPStan\Parser\TypeTraverserInstanceofVisitor
	{
		return new PHPStan\Parser\TypeTraverserInstanceofVisitor;
	}


	public function createService072(): PHPStan\Parser\VariadicFunctionsVisitor
	{
		return new PHPStan\Parser\VariadicFunctionsVisitor;
	}


	public function createService073(): PHPStan\Parser\ArrayFindArgVisitor
	{
		return new PHPStan\Parser\ArrayFindArgVisitor;
	}


	public function createService074(): PHPStan\Parser\ArrayWalkArgVisitor
	{
		return new PHPStan\Parser\ArrayWalkArgVisitor;
	}


	public function createService075(): PHPStan\Parser\ImplodeArgVisitor
	{
		return new PHPStan\Parser\ImplodeArgVisitor;
	}


	public function createService076(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('0377'));
	}


	public function createService077(): PHPStan\Parser\ClosureBindToVarVisitor
	{
		return new PHPStan\Parser\ClosureBindToVarVisitor;
	}


	public function createService078(): PHPStan\Parser\ImmediatelyInvokedClosureVisitor
	{
		return new PHPStan\Parser\ImmediatelyInvokedClosureVisitor;
	}


	public function createService079(): PHPStan\Parser\MagicConstantParamDefaultVisitor
	{
		return new PHPStan\Parser\MagicConstantParamDefaultVisitor;
	}


	public function createService080(): PHPStan\Parser\ParentStmtTypesVisitor
	{
		return new PHPStan\Parser\ParentStmtTypesVisitor;
	}


	public function createService081(): PHPStan\Parser\DeclarePositionVisitor
	{
		return new PHPStan\Parser\DeclarePositionVisitor;
	}


	public function createService082(): PHPStan\Parser\CurlSetOptArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArgVisitor;
	}


	public function createService083(): PHPStan\Parser\AnonymousClassVisitor
	{
		return new PHPStan\Parser\AnonymousClassVisitor;
	}


	public function createService084(): PHPStan\Parser\ArrayMapArgVisitor
	{
		return new PHPStan\Parser\ArrayMapArgVisitor;
	}


	public function createService085(): PHPStan\Parser\VariadicMethodsVisitor
	{
		return new PHPStan\Parser\VariadicMethodsVisitor;
	}


	public function createService086(): PHPStan\Parser\ArrowFunctionArgVisitor
	{
		return new PHPStan\Parser\ArrowFunctionArgVisitor;
	}


	public function createService087(): PHPStan\Parser\ClosureArgVisitor
	{
		return new PHPStan\Parser\ClosureArgVisitor;
	}


	public function createService088(): PHPStan\Parser\TryCatchTypeVisitor
	{
		return new PHPStan\Parser\TryCatchTypeVisitor;
	}


	public function createService089(): PHPStan\Parser\ClosureBindArgVisitor
	{
		return new PHPStan\Parser\ClosureBindArgVisitor;
	}


	public function createService090(): PHPStan\Parser\CurlSetOptArrayArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArrayArgVisitor;
	}


	public function createService091(): PHPStan\Parser\LastConditionVisitor
	{
		return new PHPStan\Parser\LastConditionVisitor;
	}


	public function createService092(): PHPStan\Parser\NewAssignedToPropertyVisitor
	{
		return new PHPStan\Parser\NewAssignedToPropertyVisitor;
	}


	public function createService093(): PHPStan\Parser\ArrayFilterArgVisitor
	{
		return new PHPStan\Parser\ArrayFilterArgVisitor;
	}


	public function createService094(): PHPStan\Parser\StandaloneThrowExprVisitor
	{
		return new PHPStan\Parser\StandaloneThrowExprVisitor;
	}


	public function createService095(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('097'), $this->getService('096'), $this->getService('0164'));
	}


	public function createService096(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver($this->getService('028'), $this->getService('07'));
	}


	public function createService097(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver(
			$this->getService('0100'),
			$this->getService('028'),
			$this->getService('0183'),
			$this->getService('059'),
			$this->getService('07')
		);
	}


	public function createService098(): PHPStan\PhpDoc\BcMathNumberStubFilesExtension
	{
		return new PHPStan\PhpDoc\BcMathNumberStubFilesExtension($this->getService('0377'));
	}


	public function createService099(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('0364'));
	}


	public function createService0100(): PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('0365'));
	}


	public function createService0101(): PHPStan\PhpDoc\DefaultStubFilesProvider
	{
		return new PHPStan\PhpDoc\DefaultStubFilesProvider(
			$this->getService('0365'),
			$this->getService('05'),
			[
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/Countable.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/file.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/stream_socket_client.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/stream_socket_server.stub',
			],
			['/Users/didou/dev/machour/clictopay']
		);
	}


	public function createService0102(): PHPStan\PhpDoc\SocketSelectStubFilesExtension
	{
		return new PHPStan\PhpDoc\SocketSelectStubFilesExtension($this->getService('0377'));
	}


	public function createService0103(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('0684'), $this->getService('0687'));
	}


	public function createService0104(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('0684'), $this->getService('0685'), $this->getService('097'));
	}


	public function createService0105(): PHPStan\PhpDoc\JsonValidateStubFilesExtension
	{
		return new PHPStan\PhpDoc\JsonValidateStubFilesExtension($this->getService('0377'));
	}


	public function createService0106(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0360'), $this->getService('stubPhpDocProvider'));
	}


	public function createService0107(): PHPStan\PhpDoc\ReflectionClassStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionClassStubFilesExtension($this->getService('0377'));
	}


	public function createService0108(): PHPStan\PhpDoc\ReflectionEnumStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionEnumStubFilesExtension($this->getService('0377'));
	}


	public function createService0109(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0110(): PHPStan\Rules\Properties\AccessStaticPropertiesCheck
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0129'),
			$this->getService('0121'),
			$this->getService('0377'),
			true
		);
	}


	public function createService0111(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('0365'));
	}


	public function createService0112(): PHPStan\Rules\Properties\AccessPropertiesCheck
	{
		return new PHPStan\Rules\Properties\AccessPropertiesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0129'),
			$this->getService('0377'),
			true,
			false,
			false
		);
	}


	public function createService0113(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0114(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0115(): PHPStan\Rules\ClassForbiddenNameCheck
	{
		return new PHPStan\Rules\ClassForbiddenNameCheck($this->getService('0365'));
	}


	public function createService0116(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0117(): PHPStan\Rules\Debug\DumpPhpDocTypeRule
	{
		return new PHPStan\Rules\Debug\DumpPhpDocTypeRule($this->getService('reflectionProvider'), $this->getService('0688'));
	}


	public function createService0118(): PHPStan\Rules\Debug\DumpNativeTypeRule
	{
		return new PHPStan\Rules\Debug\DumpNativeTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0119(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'), $this->getService('0104'));
	}


	public function createService0120(): PHPStan\Rules\Debug\DebugScopeRule
	{
		return new PHPStan\Rules\Debug\DebugScopeRule($this->getService('reflectionProvider'));
	}


	public function createService0121(): PHPStan\Rules\ClassNameCheck
	{
		return new PHPStan\Rules\ClassNameCheck(
			$this->getService('0122'),
			$this->getService('0115'),
			$this->getService('reflectionProvider'),
			$this->getService('0365')
		);
	}


	public function createService0122(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0123(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0127'),
			$this->getService('0121'),
			false
		);
	}


	public function createService0124(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true
		);
	}


	public function createService0125(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('0124'), true);
	}


	public function createService0126(): PHPStan\Rules\Pure\FunctionPurityCheck
	{
		return new PHPStan\Rules\Pure\FunctionPurityCheck;
	}


	public function createService0127(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0129'),
			$this->getService('0175'),
			$this->getService('0164'),
			$this->getService('0113'),
			false,
			false,
			true,
			false
		);
	}


	public function createService0128(): PHPStan\Rules\Functions\PrintfHelper
	{
		return new PHPStan\Rules\Functions\PrintfHelper($this->getService('0377'));
	}


	public function createService0129(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper(
			$this->getService('reflectionProvider'),
			false,
			false,
			false,
			false,
			false,
			false,
			true
		);
	}


	public function createService0130(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService0131(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0132(): PHPStan\Rules\Generics\MethodTagTemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeCheck($this->getService('0360'), $this->getService('0133'));
	}


	public function createService0133(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			$this->getService('0131'),
			$this->getService('0185'),
			true
		);
	}


	public function createService0134(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0135(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0131'),
			$this->getService('0134'),
			$this->getService('0164'),
			['DOMNamedNodeMap'],
			false
		);
	}


	public function createService0136(): PHPStan\Rules\ParameterCastableToStringCheck
	{
		return new PHPStan\Rules\ParameterCastableToStringCheck($this->getService('0129'));
	}


	public function createService0137(): PHPStan\Rules\Methods\ParentMethodHelper
	{
		return new PHPStan\Rules\Methods\ParentMethodHelper($this->getService('0693'));
	}


	public function createService0138(): PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider
	{
		return new PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider($this->getService('0365'));
	}


	public function createService0139(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0129'),
			false,
			true
		);
	}


	public function createService0140(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0129'),
			$this->getService('0121'),
			false,
			true,
			true
		);
	}


	public function createService0141(): PHPStan\Rules\Methods\MethodPrototypeFinder
	{
		return new PHPStan\Rules\Methods\MethodPrototypeFinder($this->getService('0377'), $this->getService('0693'));
	}


	public function createService0142(): PHPStan\Rules\Methods\MethodParameterComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodParameterComparisonHelper($this->getService('0377'));
	}


	public function createService0143(): PHPStan\Rules\Methods\MethodVisibilityComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodVisibilityComparisonHelper;
	}


	public function createService0144(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('0365'));
	}


	public function createService0145(): PHPStan\Rules\TooWideTypehints\TooWideTypeCheck
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideTypeCheck($this->getService('0113'), false, false);
	}


	public function createService0146(): PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck($this->getService('0145'));
	}


	public function createService0147(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(false, ['DOMNamedNodeMap']);
	}


	public function createService0148(): PHPStan\Rules\Classes\MethodTagCheck
	{
		return new PHPStan\Rules\Classes\MethodTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			$this->getService('0131'),
			$this->getService('0147'),
			$this->getService('0164'),
			true,
			false,
			true
		);
	}


	public function createService0149(): PHPStan\Rules\Classes\LocalTypeAliasesCheck
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesCheck(
			[],
			$this->getService('reflectionProvider'),
			$this->getService('097'),
			$this->getService('0147'),
			$this->getService('0121'),
			$this->getService('0164'),
			$this->getService('0131'),
			false,
			true,
			true
		);
	}


	public function createService0150(): PHPStan\Rules\Classes\MixinCheck
	{
		return new PHPStan\Rules\Classes\MixinCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			$this->getService('0131'),
			$this->getService('0147'),
			$this->getService('0164'),
			true,
			false,
			true
		);
	}


	public function createService0151(): PHPStan\Rules\Classes\ConsistentConstructorHelper
	{
		return new PHPStan\Rules\Classes\ConsistentConstructorHelper;
	}


	public function createService0152(): PHPStan\Rules\Classes\PropertyTagCheck
	{
		return new PHPStan\Rules\Classes\PropertyTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			$this->getService('0131'),
			$this->getService('0147'),
			$this->getService('0164'),
			true,
			false,
			true
		);
	}


	public function createService0153(): PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0154(): PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0155(): PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider'),
			$this->getService('0129')
		);
	}


	public function createService0156(): PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider'),
			$this->getService('0129')
		);
	}


	public function createService0157(): PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider'),
			$this->getService('0129')
		);
	}


	public function createService0158(): PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider'),
			$this->getService('0129')
		);
	}


	public function createService0159(): PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0160(): PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0161(): PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0162(): PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0163(): PHPStan\Rules\PhpDoc\GenericCallableRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\GenericCallableRuleHelper($this->getService('0133'));
	}


	public function createService0164(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0165(): PHPStan\Rules\PhpDoc\AssertRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\AssertRuleHelper(
			$this->getService('reflectionProvider'),
			$this->getService('0164'),
			$this->getService('0121'),
			$this->getService('0147'),
			$this->getService('0131'),
			true,
			false
		);
	}


	public function createService0166(): PHPStan\Rules\PhpDoc\RequireExtendsCheck
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsCheck($this->getService('0121'), true, true);
	}


	public function createService0167(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck(
			$this->getService('0131'),
			$this->getService('0164'),
			$this->getService('0163')
		);
	}


	public function createService0168(): PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper(
			$this->getService('097'),
			$this->getService('0360'),
			$this->getService('reflectionProvider'),
			false,
			false
		);
	}


	public function createService0169(): PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper;
	}


	public function createService0170(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService0171(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0129'));
	}


	public function createService0172(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck(true);
	}


	public function createService0173(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver($this->getService('reflectionProvider'), [], [], [], []);
	}


	public function createService0174(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService0175(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0176(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0109'), $this->getService('0113'), true, true);
	}


	public function createService0177(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			$this->getService('0164'),
			$this->getService('0377'),
			true,
			false
		);
	}


	public function createService0178(): PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper;
	}


	public function createService0179(): PHPStan\Rules\Playground\NeverRuleHelper
	{
		return new PHPStan\Rules\Playground\NeverRuleHelper;
	}


	public function createService0180(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0129'), false, false, false);
	}


	public function createService0181(): PHPStan\Fixable\PhpDoc\PhpDocEditor
	{
		return new PHPStan\Fixable\PhpDoc\PhpDocEditor($this->getService('0688'), $this->getService('0684'), $this->getService('0687'));
	}


	public function createService0182(): PHPStan\Fixable\Patcher
	{
		return new PHPStan\Fixable\Patcher;
	}


	public function createService0183(): PHPStan\Type\LazyTypeAliasResolverProvider
	{
		return new PHPStan\Type\LazyTypeAliasResolverProvider($this->getService('0365'));
	}


	public function createService0184(): PHPStan\Type\ClosureTypeFactory
	{
		return new PHPStan\Type\ClosureTypeFactory(
			$this->getService('07'),
			$this->getService('0690'),
			$this->getService('betterReflectionReflector'),
			$this->getService('028'),
			$this->getService('currentPhpVersionPhpParser')
		);
	}


	public function createService0185(): PHPStan\Type\UsefulTypeAliasResolver
	{
		return new PHPStan\Type\UsefulTypeAliasResolver(
			[],
			$this->getService('0104'),
			$this->getService('097'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0186(): PHPStan\Type\Regex\RegexGroupParser
	{
		return new PHPStan\Type\Regex\RegexGroupParser($this->getService('0377'), $this->getService('0187'));
	}


	public function createService0187(): PHPStan\Type\Regex\RegexExpressionHelper
	{
		return new PHPStan\Type\Regex\RegexExpressionHelper($this->getService('07'));
	}


	public function createService0188(): PHPStan\Type\BitwiseFlagHelper
	{
		return new PHPStan\Type\BitwiseFlagHelper($this->getService('reflectionProvider'));
	}


	public function createService0189(): PHPStan\Type\Constant\OversizedArrayBuilder
	{
		return new PHPStan\Type\Constant\OversizedArrayBuilder;
	}


	public function createService0190(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0191(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0192(): PHPStan\Type\Php\DateFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeHelper;
	}


	public function createService0193(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0194(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0195(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0196(): PHPStan\Type\Php\RegexArrayShapeMatcher
	{
		return new PHPStan\Type\Php\RegexArrayShapeMatcher(
			$this->getService('0186'),
			$this->getService('0187'),
			$this->getService('0377')
		);
	}


	public function createService0197(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0198(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0199(): PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension($this->getService('0377'));
	}


	public function createService0200(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0201(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0202(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0203(): PHPStan\Type\Php\ArrayFirstLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFirstLastDynamicReturnTypeExtension;
	}


	public function createService0204(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0205(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension($this->getService('0377'));
	}


	public function createService0206(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0207(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService0208(): PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension;
	}


	public function createService0209(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0210(): PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension;
	}


	public function createService0211(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension($this->getService('0377'));
	}


	public function createService0212(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0213(): PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService0214(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0215(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0216(): PHPStan\Type\Php\IdateFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\IdateFunctionReturnTypeHelper;
	}


	public function createService0217(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0218(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension($this->getService('0377'));
	}


	public function createService0219(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0220(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0221(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0222(): PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension;
	}


	public function createService0223(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0224(): PHPStan\Type\Php\PregMatchTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PregMatchTypeSpecifyingExtension($this->getService('0196'));
	}


	public function createService0225(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0226(): PHPStan\Type\Php\DateFormatMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatMethodReturnTypeExtension($this->getService('0192'));
	}


	public function createService0227(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0228(): PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension;
	}


	public function createService0229(): PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension;
	}


	public function createService0230(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService0231(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension($this->getService('0275'));
	}


	public function createService0232(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0233(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0234(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0235(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0236(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0237(): PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension;
	}


	public function createService0238(): PHPStan\Type\Php\FilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\FilterFunctionReturnTypeHelper($this->getService('reflectionProvider'), $this->getService('0377'));
	}


	public function createService0239(): PHPStan\Type\Php\ArrayColumnHelper
	{
		return new PHPStan\Type\Php\ArrayColumnHelper($this->getService('0377'));
	}


	public function createService0240(): PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension
	{
		return new PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension($this->getService('0196'));
	}


	public function createService0241(): PHPStan\Type\Php\ParseStrParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\ParseStrParameterOutTypeExtension;
	}


	public function createService0242(): PHPStan\Type\Php\LtrimFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\LtrimFunctionReturnTypeExtension;
	}


	public function createService0243(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(true);
	}


	public function createService0244(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0245(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0246(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension($this->getService('0192'));
	}


	public function createService0247(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0248(): PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0249(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0250(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService0251(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0252(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0253(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('0188'));
	}


	public function createService0254(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension($this->getService('0306'));
	}


	public function createService0255(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0256(): PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension($this->getService('0377'));
	}


	public function createService0257(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0258(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0259(): PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension;
	}


	public function createService0260(): PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension($this->getService('0238'));
	}


	public function createService0261(): PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0262(): PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension;
	}


	public function createService0263(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0264(): PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService0265(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension(
			null,
			$this->getService('0378'),
			$this->getService('0377')
		);
	}


	public function createService0266(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0267(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0268(): PHPStan\Type\Php\VersionCompareFunctionDynamicThrowTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicThrowTypeExtension($this->getService('0377'));
	}


	public function createService0269(): PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension($this->getService('0192'));
	}


	public function createService0270(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0271(): PHPStan\Type\Php\IdateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IdateFunctionReturnTypeExtension($this->getService('0216'));
	}


	public function createService0272(): PHPStan\Type\Php\ClosureGetCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureGetCurrentDynamicReturnTypeExtension;
	}


	public function createService0273(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0274(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension($this->getService('0377'));
	}


	public function createService0275(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('0377')
		);
	}


	public function createService0276(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0277(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0278(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension;
	}


	public function createService0279(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0280(): PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0281(): PHPStan\Type\Php\IniGetReturnTypeExtension
	{
		return new PHPStan\Type\Php\IniGetReturnTypeExtension;
	}


	public function createService0282(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0283(): PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension;
	}


	public function createService0284(): PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension;
	}


	public function createService0285(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0286(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0287(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0288(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension($this->getService('0377'));
	}


	public function createService0289(): PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension;
	}


	public function createService0290(): PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension;
	}


	public function createService0291(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0292(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension($this->getService('0306'));
	}


	public function createService0293(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0294(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0295(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension($this->getService('0377'));
	}


	public function createService0296(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0297(): PHPStan\Type\Php\StrContainingTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrContainingTypeSpecifyingExtension;
	}


	public function createService0298(): PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension;
	}


	public function createService0299(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0300(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0301(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService0302(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0303(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0304(): PHPStan\Type\Php\FilterVarThrowTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0305(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('0238'));
	}


	public function createService0306(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper;
	}


	public function createService0307(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0308(): PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension($this->getService('0377'));
	}


	public function createService0309(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0310(): PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension($this->getService('0377'));
	}


	public function createService0311(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0312(): PHPStan\Type\Php\GettypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettypeFunctionReturnTypeExtension;
	}


	public function createService0313(): PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension;
	}


	public function createService0314(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			true,
			['stdClass']
		);
	}


	public function createService0315(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0316(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0317(): PHPStan\Type\Php\StrrevFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrrevFunctionReturnTypeExtension;
	}


	public function createService0318(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0319(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0257'));
	}


	public function createService0320(): PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension($this->getService('0377'));
	}


	public function createService0321(): PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension
	{
		return new PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension;
	}


	public function createService0322(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService0323(): PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension;
	}


	public function createService0324(): PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension;
	}


	public function createService0325(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0326(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService0327(): PHPStan\Type\Php\PregMatchParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\PregMatchParameterOutTypeExtension($this->getService('0196'));
	}


	public function createService0328(): PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension;
	}


	public function createService0329(): PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension;
	}


	public function createService0330(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0331(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0332(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0333(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'), $this->getService('0188'));
	}


	public function createService0334(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0335(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0113'));
	}


	public function createService0336(): PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension(
			$this->getService('0238'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0337(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0338(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('0377'));
	}


	public function createService0339(): PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension($this->getService('0239'));
	}


	public function createService0340(): PHPStan\Type\Php\ConstantHelper
	{
		return new PHPStan\Type\Php\ConstantHelper;
	}


	public function createService0341(): PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension;
	}


	public function createService0342(): PHPStan\Type\Php\RoundFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0343(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0344(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0345(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0346(): PHPStan\Type\Php\ConstantFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ConstantFunctionReturnTypeExtension($this->getService('0340'));
	}


	public function createService0347(): PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension($this->getService('0275'));
	}


	public function createService0348(): PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension;
	}


	public function createService0349(): PHPStan\Type\Php\AssertThrowTypeExtension
	{
		return new PHPStan\Type\Php\AssertThrowTypeExtension;
	}


	public function createService0350(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0351(): PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension;
	}


	public function createService0352(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension($this->getService('0340'));
	}


	public function createService0353(): PHPStan\Type\Php\PDOConnectReturnTypeExtension
	{
		return new PHPStan\Type\Php\PDOConnectReturnTypeExtension($this->getService('0377'));
	}


	public function createService0354(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0355(): PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension;
	}


	public function createService0356(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0357(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension($this->getService('0377'));
	}


	public function createService0358(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0188')
		);
	}


	public function createService0359(): PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension;
	}


	public function createService0360(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('028'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0103'),
			$this->getService('095'),
			$this->getService('068'),
			$this->getService('05')
		);
	}


	public function createService0361(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService0362(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService0363(): PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('0365'));
	}


	public function createService0364(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/Users/didou/dev/machour/clictopay',
			'/Users/didou/dev/machour/clictopay/build/phpstan',
			[
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'/Users/didou/dev/machour/clictopay/phpstan.neon',
			],
			$this->getParameter('analysedPaths'),
			['/Users/didou/dev/machour/clictopay'],
			$this->getParameter('analysedPathsFromConfig'),
			'4',
			null,
			null,
			$this->getParameter('singleReflectionFile'),
			$this->getParameter('singleReflectionInsteadOfFile')
		);
	}


	public function createService0365(): PHPStan\DependencyInjection\MemoizingContainer
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('0362'));
	}


	public function createService0366(): PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider($this->getService('0365'));
	}


	public function createService0367(): PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('0365'));
	}


	public function createService0368(): PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('0365'));
	}


	public function createService0369(): PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider($this->getService('0365'));
	}


	public function createService0370(): PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('0365'));
	}


	public function createService0371(): PHPStan\DependencyInjection\Type\LazyParameterClosureThisExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterClosureThisExtensionProvider($this->getService('0365'));
	}


	public function createService0372(): PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider($this->getService('0365'));
	}


	public function createService0373(): PHPStan\Collectors\RegistryFactory
	{
		return new PHPStan\Collectors\RegistryFactory($this->getService('0365'));
	}


	public function createService0374(): PHPStan\Collectors\Registry
	{
		return $this->getService('0373')->create();
	}


	public function createService0375(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(null, ['/Users/didou/dev/machour/clictopay']);
	}


	public function createService0376(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('0375')->create();
	}


	public function createService0377(): PHPStan\Php\PhpVersion
	{
		return $this->getService('0376')->create();
	}


	public function createService0378(): PHPStan\Php\ComposerPhpVersionFactory
	{
		return new PHPStan\Php\ComposerPhpVersionFactory(['/Users/didou/dev/machour/clictopay']);
	}


	public function createService0379(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 600.0, 134217728);
	}


	public function createService0380(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService0381(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_e5800887a9 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder($this->container->getService('05'), $analyseExcludes);
			}
		};
	}


	public function createService0382(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_e5800887a9 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('018'),
					$fileName
				);
			}
		};
	}


	public function createService0383(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_e5800887a9 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('022'));
			}
		};
	}


	public function createService0384(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_e5800887a9 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionMethod $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?PHPStan\Type\Type $selfOutType,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $immediatelyInvokedCallableParameters,
				array $phpDocClosureThisTypeParameters,
				bool $acceptsNamedArguments,
				array $attributes
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$this->container->getService('07'),
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('024'),
					$this->container->getService('defaultAnalysisParser'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$selfOutType,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$immediatelyInvokedCallableParameters,
					$phpDocClosureThisTypeParameters,
					$attributes
				);
			}
		};
	}


	public function createService0385(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_e5800887a9 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				?string $filename,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				bool $acceptsNamedArguments,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $phpDocParameterImmediatelyInvokedCallable,
				array $phpDocParameterClosureThisTypes,
				array $attributes
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$this->container->getService('07'),
					$reflection,
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('024'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$filename,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$phpDocParameterImmediatelyInvokedCallable,
					$phpDocParameterClosureThisTypes,
					$attributes
				);
			}
		};
	}


	public function createService0386(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_e5800887a9 $container)
			{
				$this->container = $container;
			}


			public function create(array $fileReplacements): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('0365'),
					$this->container->getService('01'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('0101'),
					$this->container->getService('05'),
					'/Users/didou/dev/machour/clictopay/build/phpstan/resultCache.php',
					$this->container->getParameter('analysedPaths'),
					$this->container->getParameter('analysedPathsFromConfig'),
					['/Users/didou/dev/machour/clictopay'],
					'4',
					null,
					[
						'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php',
						'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
					],
					[],
					[],
					$fileReplacements,
					false,
					[
						['parameters', 'editorUrl'],
						['parameters', 'editorUrlTitle'],
						['parameters', 'errorFormat'],
						['parameters', 'ignoreErrors'],
						['parameters', 'reportUnmatchedIgnoredErrors'],
						['parameters', 'tipsOfTheDay'],
						['parameters', 'parallel'],
						['parameters', 'internalErrorsCountLimit'],
						['parameters', 'cache'],
						['parameters', 'memoryLimitFile'],
						['parameters', 'pro'],
						'parametersSchema',
					],
					7
				);
			}
		};
	}


	public function createService0387(): PHPStan\Analyser\InternalScopeFactoryFactory
	{
		return new class ($this) implements PHPStan\Analyser\InternalScopeFactoryFactory {
			private $container;


			public function __construct(Container_e5800887a9 $container)
			{
				$this->container = $container;
			}


			public function create(?callable $nodeCallback): PHPStan\Analyser\InternalScopeFactory
			{
				return new PHPStan\Analyser\LazyInternalScopeFactory($this->container->getService('0365'), $nodeCallback);
			}
		};
	}


	public function createService0388(): PHPStan\Rules\Operators\InvalidUnaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidUnaryOperationRule($this->getService('0129'));
	}


	public function createService0389(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule($this->getService('0129'), $this->getService('0377'));
	}


	public function createService0390(): PHPStan\Rules\Operators\InvalidComparisonOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidComparisonOperationRule($this->getService('0129'), $this->getService('0368'), false);
	}


	public function createService0391(): PHPStan\Rules\Operators\PipeOperatorRule
	{
		return new PHPStan\Rules\Operators\PipeOperatorRule($this->getService('0129'));
	}


	public function createService0392(): PHPStan\Rules\Operators\BacktickRule
	{
		return new PHPStan\Rules\Operators\BacktickRule($this->getService('0377'));
	}


	public function createService0393(): PHPStan\Rules\Operators\InvalidAssignVarRule
	{
		return new PHPStan\Rules\Operators\InvalidAssignVarRule($this->getService('0175'));
	}


	public function createService0394(): PHPStan\Rules\Operators\InvalidBinaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidBinaryOperationRule($this->getService('070'), $this->getService('0129'));
	}


	public function createService0395(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('0109'),
			$this->getService('0113'),
			$this->getService('0129'),
			false
		);
	}


	public function createService0396(): PHPStan\Rules\Properties\PropertiesInInterfaceRule
	{
		return new PHPStan\Rules\Properties\PropertiesInInterfaceRule($this->getService('0377'));
	}


	public function createService0397(): PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule
	{
		return new PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule;
	}


	public function createService0398(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule($this->getService('0113'));
	}


	public function createService0399(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule($this->getService('0112'));
	}


	public function createService0400(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('0129'));
	}


	public function createService0401(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			$this->getService('0164'),
			$this->getService('0377'),
			true,
			false,
			true
		);
	}


	public function createService0402(): PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule($this->getService('025'));
	}


	public function createService0403(): PHPStan\Rules\Properties\PropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\PropertyAssignRefRule($this->getService('0377'), $this->getService('0113'));
	}


	public function createService0404(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule($this->getService('0113'));
	}


	public function createService0405(): PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule
	{
		return new PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule;
	}


	public function createService0406(): PHPStan\Rules\Properties\NullsafePropertyFetchRule
	{
		return new PHPStan\Rules\Properties\NullsafePropertyFetchRule;
	}


	public function createService0407(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule($this->getService('0129'), $this->getService('0113'));
	}


	public function createService0408(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule($this->getService('0113'), $this->getService('025'));
	}


	public function createService0409(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule($this->getService('0113'), $this->getService('025'));
	}


	public function createService0410(): PHPStan\Rules\Properties\PropertyHookAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyHookAttributesRule($this->getService('0123'));
	}


	public function createService0411(): PHPStan\Rules\Properties\PropertyAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyAttributesRule($this->getService('0123'), $this->getService('0377'));
	}


	public function createService0412(): PHPStan\Rules\Properties\SetPropertyHookParameterRule
	{
		return new PHPStan\Rules\Properties\SetPropertyHookParameterRule($this->getService('0147'), true, false);
	}


	public function createService0413(): PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule
	{
		return new PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule;
	}


	public function createService0414(): PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule($this->getService('0177'));
	}


	public function createService0415(): PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule($this->getService('025'));
	}


	public function createService0416(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('0129'),
			$this->getService('0109'),
			$this->getService('0113'),
			false
		);
	}


	public function createService0417(): PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule
	{
		return new PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule;
	}


	public function createService0418(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('0112'));
	}


	public function createService0419(): PHPStan\Rules\Properties\ReadOnlyPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyRule($this->getService('0377'));
	}


	public function createService0420(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule($this->getService('0110'));
	}


	public function createService0421(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule;
	}


	public function createService0422(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0110'));
	}


	public function createService0423(): PHPStan\Rules\Properties\OverridingPropertyRule
	{
		return new PHPStan\Rules\Properties\OverridingPropertyRule($this->getService('0377'), true, false, false);
	}


	public function createService0424(): PHPStan\Rules\Properties\PropertyInClassRule
	{
		return new PHPStan\Rules\Properties\PropertyInClassRule($this->getService('0377'));
	}


	public function createService0425(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule($this->getService('0187'));
	}


	public function createService0426(): PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule($this->getService('0125'), true, true);
	}


	public function createService0427(): PHPStan\Rules\Comparison\BooleanOrConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanOrConstantConditionRule($this->getService('0125'), true, false, true);
	}


	public function createService0428(): PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule($this->getService('0124'), true, false, true);
	}


	public function createService0429(): PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule(true, true);
	}


	public function createService0430(): PHPStan\Rules\Comparison\BooleanNotConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanNotConstantConditionRule($this->getService('0125'), true, false, true);
	}


	public function createService0431(): PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule($this->getService('0125'), true, true);
	}


	public function createService0432(): PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule($this->getService('0124'), true, false, true);
	}


	public function createService0433(): PHPStan\Rules\Comparison\MatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\MatchExpressionRule($this->getService('0125'), true);
	}


	public function createService0434(): PHPStan\Rules\Comparison\ConstantLooseComparisonRule
	{
		return new PHPStan\Rules\Comparison\ConstantLooseComparisonRule(true, false, true);
	}


	public function createService0435(): PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule;
	}


	public function createService0436(): PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule($this->getService('0124'), true, false, true);
	}


	public function createService0437(): PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule($this->getService('0125'), true, true);
	}


	public function createService0438(): PHPStan\Rules\Comparison\IfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\IfConstantConditionRule($this->getService('0125'), true, true);
	}


	public function createService0439(): PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule($this->getService('0125'), true, true);
	}


	public function createService0440(): PHPStan\Rules\Comparison\ElseIfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\ElseIfConstantConditionRule($this->getService('0125'), true, false, true);
	}


	public function createService0441(): PHPStan\Rules\Comparison\BooleanAndConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanAndConstantConditionRule($this->getService('0125'), true, false, true);
	}


	public function createService0442(): PHPStan\Rules\Comparison\LogicalXorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\LogicalXorConstantConditionRule($this->getService('0125'), true, false, true);
	}


	public function createService0443(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		return new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule($this->getService('054'), true, false, true);
	}


	public function createService0444(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			false,
			true
		);
	}


	public function createService0445(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			false,
			true
		);
	}


	public function createService0446(): PHPStan\Rules\Pure\PureMethodRule
	{
		return new PHPStan\Rules\Pure\PureMethodRule($this->getService('0126'));
	}


	public function createService0447(): PHPStan\Rules\Pure\PureFunctionRule
	{
		return new PHPStan\Rules\Pure\PureFunctionRule($this->getService('0126'));
	}


	public function createService0448(): PHPStan\Rules\Cast\VoidCastRule
	{
		return new PHPStan\Rules\Cast\VoidCastRule($this->getService('0377'));
	}


	public function createService0449(): PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule
	{
		return new PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule($this->getService('070'), $this->getService('0129'));
	}


	public function createService0450(): PHPStan\Rules\Cast\PrintRule
	{
		return new PHPStan\Rules\Cast\PrintRule($this->getService('0129'));
	}


	public function createService0451(): PHPStan\Rules\Cast\InvalidCastRule
	{
		return new PHPStan\Rules\Cast\InvalidCastRule($this->getService('reflectionProvider'), $this->getService('0129'));
	}


	public function createService0452(): PHPStan\Rules\Cast\DeprecatedCastRule
	{
		return new PHPStan\Rules\Cast\DeprecatedCastRule($this->getService('0377'));
	}


	public function createService0453(): PHPStan\Rules\Cast\EchoRule
	{
		return new PHPStan\Rules\Cast\EchoRule($this->getService('0129'));
	}


	public function createService0454(): PHPStan\Rules\Cast\UnsetCastRule
	{
		return new PHPStan\Rules\Cast\UnsetCastRule($this->getService('0377'));
	}


	public function createService0455(): PHPStan\Rules\Generators\YieldTypeRule
	{
		return new PHPStan\Rules\Generators\YieldTypeRule($this->getService('0129'));
	}


	public function createService0456(): PHPStan\Rules\Generators\YieldInGeneratorRule
	{
		return new PHPStan\Rules\Generators\YieldInGeneratorRule(false);
	}


	public function createService0457(): PHPStan\Rules\Generators\YieldFromTypeRule
	{
		return new PHPStan\Rules\Generators\YieldFromTypeRule($this->getService('0129'), false);
	}


	public function createService0458(): PHPStan\Rules\Variables\ParameterOutAssignedTypeRule
	{
		return new PHPStan\Rules\Variables\ParameterOutAssignedTypeRule($this->getService('0129'));
	}


	public function createService0459(): PHPStan\Rules\Variables\EmptyRule
	{
		return new PHPStan\Rules\Variables\EmptyRule($this->getService('0176'));
	}


	public function createService0460(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule(true);
	}


	public function createService0461(): PHPStan\Rules\Variables\NullCoalesceRule
	{
		return new PHPStan\Rules\Variables\NullCoalesceRule($this->getService('0176'));
	}


	public function createService0462(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, true);
	}


	public function createService0463(): PHPStan\Rules\Variables\IssetRule
	{
		return new PHPStan\Rules\Variables\IssetRule($this->getService('0176'));
	}


	public function createService0464(): PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule
	{
		return new PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule($this->getService('0129'));
	}


	public function createService0465(): PHPStan\Rules\Variables\VariableCloningRule
	{
		return new PHPStan\Rules\Variables\VariableCloningRule($this->getService('0129'));
	}


	public function createService0466(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule($this->getService('0113'), $this->getService('0377'));
	}


	public function createService0467(): PHPStan\Rules\DeadCode\UnusedPrivateConstantRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateConstantRule($this->getService('0144'));
	}


	public function createService0468(): PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule;
	}


	public function createService0469(): PHPStan\Rules\DeadCode\NoopRule
	{
		return new PHPStan\Rules\DeadCode\NoopRule($this->getService('070'));
	}


	public function createService0470(): PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule;
	}


	public function createService0471(): PHPStan\Rules\DeadCode\UnusedPrivateMethodRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateMethodRule($this->getService('0138'));
	}


	public function createService0472(): PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule($this->getService('0111'), [], [], false);
	}


	public function createService0473(): PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule;
	}


	public function createService0474(): PHPStan\Rules\DeadCode\UnreachableStatementRule
	{
		return new PHPStan\Rules\DeadCode\UnreachableStatementRule;
	}


	public function createService0475(): PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule;
	}


	public function createService0476(): PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule
	{
		return new PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule;
	}


	public function createService0477(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('0127')
		);
	}


	public function createService0478(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('reflectionProvider'), false, true);
	}


	public function createService0479(): PHPStan\Rules\Functions\RedefinedParametersRule
	{
		return new PHPStan\Rules\Functions\RedefinedParametersRule;
	}


	public function createService0480(): PHPStan\Rules\Functions\ReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ReturnNullsafeByRefRule($this->getService('0175'));
	}


	public function createService0481(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule($this->getService('0128'), $this->getService('reflectionProvider'));
	}


	public function createService0482(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		return new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('0114'));
	}


	public function createService0483(): PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule;
	}


	public function createService0484(): PHPStan\Rules\Functions\PrintfArrayParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfArrayParametersRule($this->getService('0128'), $this->getService('reflectionProvider'));
	}


	public function createService0485(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeRule($this->getService('0171'));
	}


	public function createService0486(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('0177'));
	}


	public function createService0487(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('0171'));
	}


	public function createService0488(): PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule($this->getService('0171'));
	}


	public function createService0489(): PHPStan\Rules\Functions\FunctionCallableRule
	{
		return new PHPStan\Rules\Functions\FunctionCallableRule(
			$this->getService('reflectionProvider'),
			$this->getService('0129'),
			$this->getService('0377'),
			false,
			false
		);
	}


	public function createService0490(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('0177'));
	}


	public function createService0491(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createService0492(): PHPStan\Rules\Functions\CallCallablesRule
	{
		return new PHPStan\Rules\Functions\CallCallablesRule($this->getService('0127'), $this->getService('0129'), false);
	}


	public function createService0493(): PHPStan\Rules\Functions\CallToFunctionStatementWithNoDiscardRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStatementWithNoDiscardRule(
			$this->getService('reflectionProvider'),
			$this->getService('0377')
		);
	}


	public function createService0494(): PHPStan\Rules\Functions\UselessFunctionReturnValueRule
	{
		return new PHPStan\Rules\Functions\UselessFunctionReturnValueRule($this->getService('reflectionProvider'));
	}


	public function createService0495(): PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule;
	}


	public function createService0496(): PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule($this->getService('0175'));
	}


	public function createService0497(): PHPStan\Rules\Functions\ParamAttributesRule
	{
		return new PHPStan\Rules\Functions\ParamAttributesRule($this->getService('0123'));
	}


	public function createService0498(): PHPStan\Rules\Functions\ArrowFunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionAttributesRule($this->getService('0123'));
	}


	public function createService0499(): PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule;
	}


	public function createService0500(): PHPStan\Rules\Functions\DefineParametersRule
	{
		return new PHPStan\Rules\Functions\DefineParametersRule($this->getService('0377'));
	}


	public function createService0501(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule(
			$this->getService('0177'),
			$this->getService('0377')
		);
	}


	public function createService0502(): PHPStan\Rules\Functions\FunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\FunctionAttributesRule($this->getService('0123'));
	}


	public function createService0503(): PHPStan\Rules\Functions\ClosureAttributesRule
	{
		return new PHPStan\Rules\Functions\ClosureAttributesRule($this->getService('0123'));
	}


	public function createService0504(): PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createService0505(): PHPStan\Rules\Functions\VariadicParametersDeclarationRule
	{
		return new PHPStan\Rules\Functions\VariadicParametersDeclarationRule;
	}


	public function createService0506(): PHPStan\Rules\Keywords\RequireFileExistsRule
	{
		return new PHPStan\Rules\Keywords\RequireFileExistsRule('/Users/didou/dev/machour/clictopay');
	}


	public function createService0507(): PHPStan\Rules\Keywords\DeclareStrictTypesRule
	{
		return new PHPStan\Rules\Keywords\DeclareStrictTypesRule($this->getService('070'));
	}


	public function createService0508(): PHPStan\Rules\Keywords\ContinueBreakInLoopRule
	{
		return new PHPStan\Rules\Keywords\ContinueBreakInLoopRule;
	}


	public function createService0509(): PHPStan\Rules\Generics\MethodSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\MethodSignatureVarianceRule($this->getService('0134'));
	}


	public function createService0510(): PHPStan\Rules\Generics\InterfaceAncestorsRule
	{
		return new PHPStan\Rules\Generics\InterfaceAncestorsRule($this->getService('0135'), $this->getService('0130'));
	}


	public function createService0511(): PHPStan\Rules\Generics\UsedTraitsRule
	{
		return new PHPStan\Rules\Generics\UsedTraitsRule($this->getService('0360'), $this->getService('0135'));
	}


	public function createService0512(): PHPStan\Rules\Generics\ClassAncestorsRule
	{
		return new PHPStan\Rules\Generics\ClassAncestorsRule($this->getService('0135'), $this->getService('0130'));
	}


	public function createService0513(): PHPStan\Rules\Generics\FunctionTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\FunctionTemplateTypeRule($this->getService('0360'), $this->getService('0133'));
	}


	public function createService0514(): PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule(
			$this->getService('0132'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0515(): PHPStan\Rules\Generics\TraitTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\TraitTemplateTypeRule($this->getService('0360'), $this->getService('0133'));
	}


	public function createService0516(): PHPStan\Rules\Generics\EnumAncestorsRule
	{
		return new PHPStan\Rules\Generics\EnumAncestorsRule($this->getService('0135'), $this->getService('0130'));
	}


	public function createService0517(): PHPStan\Rules\Generics\MethodTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTemplateTypeRule($this->getService('0360'), $this->getService('0133'));
	}


	public function createService0518(): PHPStan\Rules\Generics\ClassTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\ClassTemplateTypeRule($this->getService('0133'));
	}


	public function createService0519(): PHPStan\Rules\Generics\PropertyVarianceRule
	{
		return new PHPStan\Rules\Generics\PropertyVarianceRule($this->getService('0134'));
	}


	public function createService0520(): PHPStan\Rules\Generics\FunctionSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\FunctionSignatureVarianceRule($this->getService('0134'));
	}


	public function createService0521(): PHPStan\Rules\Generics\InterfaceTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\InterfaceTemplateTypeRule($this->getService('0133'));
	}


	public function createService0522(): PHPStan\Rules\Generics\EnumTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\EnumTemplateTypeRule;
	}


	public function createService0523(): PHPStan\Rules\Generics\MethodTagTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeRule($this->getService('0132'));
	}


	public function createService0524(): PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createService0525(): PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule
	{
		return new PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule;
	}


	public function createService0526(): PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule($this->getService('0129'));
	}


	public function createService0527(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule($this->getService('0140'), $this->getService('0127'));
	}


	public function createService0528(): PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule;
	}


	public function createService0529(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('0171'));
	}


	public function createService0530(): PHPStan\Rules\Methods\ConstructorReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ConstructorReturnTypeRule;
	}


	public function createService0531(): PHPStan\Rules\Methods\MethodCallableRule
	{
		return new PHPStan\Rules\Methods\MethodCallableRule($this->getService('0139'), $this->getService('0377'));
	}


	public function createService0532(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('0177'));
	}


	public function createService0533(): PHPStan\Rules\Methods\AbstractPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\AbstractPrivateMethodRule;
	}


	public function createService0534(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule(
			$this->getService('0377'),
			$this->getService('0702'),
			true,
			$this->getService('0142'),
			$this->getService('0143'),
			$this->getService('0141'),
			false
		);
	}


	public function createService0535(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createService0536(): PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule
	{
		return new PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule;
	}


	public function createService0537(): PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule(
			$this->getService('0129'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0538(): PHPStan\Rules\Methods\CallToMethodStatementWithNoDiscardRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStatementWithNoDiscardRule($this->getService('0129'), $this->getService('0377'));
	}


	public function createService0539(): PHPStan\Rules\Methods\ConsistentConstructorRule
	{
		return new PHPStan\Rules\Methods\ConsistentConstructorRule(
			$this->getService('0151'),
			$this->getService('0142'),
			$this->getService('0143')
		);
	}


	public function createService0540(): PHPStan\Rules\Methods\StaticMethodCallableRule
	{
		return new PHPStan\Rules\Methods\StaticMethodCallableRule($this->getService('0140'), $this->getService('0377'));
	}


	public function createService0541(): PHPStan\Rules\Methods\NullsafeMethodCallRule
	{
		return new PHPStan\Rules\Methods\NullsafeMethodCallRule;
	}


	public function createService0542(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule($this->getService('0139'), $this->getService('0127'));
	}


	public function createService0543(): PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule
	{
		return new PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule($this->getService('0377'));
	}


	public function createService0544(): PHPStan\Rules\Methods\MethodAttributesRule
	{
		return new PHPStan\Rules\Methods\MethodAttributesRule($this->getService('0123'));
	}


	public function createService0545(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createService0546(): PHPStan\Rules\Methods\CallToStaticMethodStatementWithNoDiscardRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStatementWithNoDiscardRule(
			$this->getService('0129'),
			$this->getService('reflectionProvider'),
			$this->getService('0377')
		);
	}


	public function createService0547(): PHPStan\Rules\Methods\ConsistentConstructorDeclarationRule
	{
		return new PHPStan\Rules\Methods\ConsistentConstructorDeclarationRule;
	}


	public function createService0548(): PHPStan\Rules\Methods\FinalPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\FinalPrivateMethodRule;
	}


	public function createService0549(): PHPStan\Rules\Constants\NativeTypedClassConstantRule
	{
		return new PHPStan\Rules\Constants\NativeTypedClassConstantRule($this->getService('0377'));
	}


	public function createService0550(): PHPStan\Rules\Constants\MagicConstantContextRule
	{
		return new PHPStan\Rules\Constants\MagicConstantContextRule;
	}


	public function createService0551(): PHPStan\Rules\Constants\OverridingConstantRule
	{
		return new PHPStan\Rules\Constants\OverridingConstantRule(true);
	}


	public function createService0552(): PHPStan\Rules\Constants\FinalConstantRule
	{
		return new PHPStan\Rules\Constants\FinalConstantRule($this->getService('0377'));
	}


	public function createService0553(): PHPStan\Rules\Constants\ConstantRule
	{
		return new PHPStan\Rules\Constants\ConstantRule(true);
	}


	public function createService0554(): PHPStan\Rules\Constants\ClassAsClassConstantRule
	{
		return new PHPStan\Rules\Constants\ClassAsClassConstantRule;
	}


	public function createService0555(): PHPStan\Rules\Constants\ValueAssignedToClassConstantRule
	{
		return new PHPStan\Rules\Constants\ValueAssignedToClassConstantRule;
	}


	public function createService0556(): PHPStan\Rules\Constants\FinalPrivateConstantRule
	{
		return new PHPStan\Rules\Constants\FinalPrivateConstantRule;
	}


	public function createService0557(): PHPStan\Rules\Constants\DynamicClassConstantFetchRule
	{
		return new PHPStan\Rules\Constants\DynamicClassConstantFetchRule($this->getService('0377'), $this->getService('0129'));
	}


	public function createService0558(): PHPStan\Rules\Constants\ConstantAttributesRule
	{
		return new PHPStan\Rules\Constants\ConstantAttributesRule($this->getService('0123'), $this->getService('0377'));
	}


	public function createService0559(): PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule($this->getService('0146'), false);
	}


	public function createService0560(): PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule($this->getService('0145'));
	}


	public function createService0561(): PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule($this->getService('0145'));
	}


	public function createService0562(): PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule(false, $this->getService('0145'));
	}


	public function createService0563(): PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule($this->getService('0111'), $this->getService('0145'));
	}


	public function createService0564(): PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule($this->getService('0145'));
	}


	public function createService0565(): PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule($this->getService('0146'));
	}


	public function createService0566(): PHPStan\Rules\Types\InvalidTypesInUnionRule
	{
		return new PHPStan\Rules\Types\InvalidTypesInUnionRule;
	}


	public function createService0567(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			true,
			true
		);
	}


	public function createService0568(): PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule($this->getService('0149'));
	}


	public function createService0569(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		return new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('0114'));
	}


	public function createService0570(): PHPStan\Rules\Classes\ReadOnlyClassRule
	{
		return new PHPStan\Rules\Classes\ReadOnlyClassRule($this->getService('0377'));
	}


	public function createService0571(): PHPStan\Rules\Classes\AllowedSubTypesRule
	{
		return new PHPStan\Rules\Classes\AllowedSubTypesRule;
	}


	public function createService0572(): PHPStan\Rules\Classes\TraitAttributeClassRule
	{
		return new PHPStan\Rules\Classes\TraitAttributeClassRule;
	}


	public function createService0573(): PHPStan\Rules\Classes\PropertyTagTraitRule
	{
		return new PHPStan\Rules\Classes\PropertyTagTraitRule($this->getService('0152'), $this->getService('reflectionProvider'));
	}


	public function createService0574(): PHPStan\Rules\Classes\PropertyTagRule
	{
		return new PHPStan\Rules\Classes\PropertyTagRule($this->getService('0152'));
	}


	public function createService0575(): PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule
	{
		return new PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule;
	}


	public function createService0576(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule(
			$this->getService('0121'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0577(): PHPStan\Rules\Classes\RequireImplementsRule
	{
		return new PHPStan\Rules\Classes\RequireImplementsRule;
	}


	public function createService0578(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('0121'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0579(): PHPStan\Rules\Classes\RequireExtendsRule
	{
		return new PHPStan\Rules\Classes\RequireExtendsRule;
	}


	public function createService0580(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule($this->getService('0377'), $this->getService('0151'));
	}


	public function createService0581(): PHPStan\Rules\Classes\MethodTagRule
	{
		return new PHPStan\Rules\Classes\MethodTagRule($this->getService('0148'));
	}


	public function createService0582(): PHPStan\Rules\Classes\MethodTagTraitUseRule
	{
		return new PHPStan\Rules\Classes\MethodTagTraitUseRule($this->getService('0148'));
	}


	public function createService0583(): PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule(
			$this->getService('0121'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0584(): PHPStan\Rules\Classes\ClassConstantAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassConstantAttributesRule($this->getService('0123'));
	}


	public function createService0585(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule;
	}


	public function createService0586(): PHPStan\Rules\Classes\LocalTypeAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesRule($this->getService('0149'));
	}


	public function createService0587(): PHPStan\Rules\Classes\InstantiationCallableRule
	{
		return new PHPStan\Rules\Classes\InstantiationCallableRule;
	}


	public function createService0588(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('0129'),
			$this->getService('0121'),
			$this->getService('0377'),
			false
		);
	}


	public function createService0589(): PHPStan\Rules\Classes\InvalidPromotedPropertiesRule
	{
		return new PHPStan\Rules\Classes\InvalidPromotedPropertiesRule($this->getService('0377'));
	}


	public function createService0590(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('0365'),
			$this->getService('reflectionProvider'),
			$this->getService('0127'),
			$this->getService('0121'),
			$this->getService('0151'),
			true
		);
	}


	public function createService0591(): PHPStan\Rules\Classes\ClassAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassAttributesRule($this->getService('0123'));
	}


	public function createService0592(): PHPStan\Rules\Classes\MixinRule
	{
		return new PHPStan\Rules\Classes\MixinRule($this->getService('0150'));
	}


	public function createService0593(): PHPStan\Rules\Classes\MixinTraitRule
	{
		return new PHPStan\Rules\Classes\MixinTraitRule($this->getService('0150'), $this->getService('reflectionProvider'));
	}


	public function createService0594(): PHPStan\Rules\Classes\MethodTagTraitRule
	{
		return new PHPStan\Rules\Classes\MethodTagTraitRule($this->getService('0148'), $this->getService('reflectionProvider'));
	}


	public function createService0595(): PHPStan\Rules\Classes\MixinTraitUseRule
	{
		return new PHPStan\Rules\Classes\MixinTraitUseRule($this->getService('0150'));
	}


	public function createService0596(): PHPStan\Rules\Classes\PropertyTagTraitUseRule
	{
		return new PHPStan\Rules\Classes\PropertyTagTraitUseRule($this->getService('0152'));
	}


	public function createService0597(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('0121'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0598(): PHPStan\Rules\Classes\NonClassAttributeClassRule
	{
		return new PHPStan\Rules\Classes\NonClassAttributeClassRule;
	}


	public function createService0599(): PHPStan\Rules\Classes\LocalTypeTraitAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeTraitAliasesRule($this->getService('0149'), $this->getService('reflectionProvider'));
	}


	public function createService0600(): PHPStan\Rules\Classes\ImpossibleInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ImpossibleInstanceOfRule($this->getService('0129'), true, false, true);
	}


	public function createService0601(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('0121'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0602(): PHPStan\Rules\Classes\EnumSanityRule
	{
		return new PHPStan\Rules\Classes\EnumSanityRule;
	}


	public function createService0603(): PHPStan\Rules\PhpDoc\SealedDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\SealedDefinitionClassRule($this->getService('0121'), true, true);
	}


	public function createService0604(): PHPStan\Rules\PhpDoc\FunctionAssertRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionAssertRule($this->getService('0165'));
	}


	public function createService0605(): PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule(
			$this->getService('0360'),
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			$this->getService('0131'),
			$this->getService('0147'),
			$this->getService('0164'),
			true,
			false,
			true
		);
	}


	public function createService0606(): PHPStan\Rules\PhpDoc\SealedDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\SealedDefinitionTraitRule($this->getService('reflectionProvider'));
	}


	public function createService0607(): PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule($this->getService('0360'), $this->getService('0167'));
	}


	public function createService0608(): PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			true,
			true
		);
	}


	public function createService0609(): PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule($this->getService('0360'));
	}


	public function createService0610(): PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule(
			$this->getService('0131'),
			$this->getService('0164'),
			$this->getService('0163')
		);
	}


	public function createService0611(): PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule($this->getService('0360'));
	}


	public function createService0612(): PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule
	{
		return new PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule($this->getService('0360'), $this->getService('0168'));
	}


	public function createService0613(): PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule
	{
		return new PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule($this->getService('0168'));
	}


	public function createService0614(): PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule($this->getService('0169'));
	}


	public function createService0615(): PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule($this->getService('0166'));
	}


	public function createService0616(): PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule($this->getService('0164'), $this->getService('0131'));
	}


	public function createService0617(): PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule($this->getService('0684'), $this->getService('0687'));
	}


	public function createService0618(): PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule($this->getService('0169'));
	}


	public function createService0619(): PHPStan\Rules\PhpDoc\MethodAssertRule
	{
		return new PHPStan\Rules\PhpDoc\MethodAssertRule($this->getService('0165'));
	}


	public function createService0620(): PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule($this->getService('0131'), $this->getService('0164'));
	}


	public function createService0621(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule($this->getService('0360'), $this->getService('0167'));
	}


	public function createService0622(): PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule($this->getService('0684'), $this->getService('0687'));
	}


	public function createService0623(): PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule;
	}


	public function createService0624(): PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0166')
		);
	}


	public function createService0625(): PHPStan\Rules\Api\RuntimeReflectionFunctionRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionFunctionRule($this->getService('reflectionProvider'));
	}


	public function createService0626(): PHPStan\Rules\Api\ApiClassConstFetchRule
	{
		return new PHPStan\Rules\Api\ApiClassConstFetchRule($this->getService('0170'), $this->getService('reflectionProvider'));
	}


	public function createService0627(): PHPStan\Rules\Api\ApiInstanceofTypeRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0628(): PHPStan\Rules\Api\OldPhpParser4ClassRule
	{
		return new PHPStan\Rules\Api\OldPhpParser4ClassRule;
	}


	public function createService0629(): PHPStan\Rules\Api\RuntimeReflectionInstantiationRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionInstantiationRule($this->getService('reflectionProvider'));
	}


	public function createService0630(): PHPStan\Rules\Api\ApiInstantiationRule
	{
		return new PHPStan\Rules\Api\ApiInstantiationRule($this->getService('0170'), $this->getService('reflectionProvider'));
	}


	public function createService0631(): PHPStan\Rules\Api\ApiInterfaceExtendsRule
	{
		return new PHPStan\Rules\Api\ApiInterfaceExtendsRule($this->getService('0170'), $this->getService('reflectionProvider'));
	}


	public function createService0632(): PHPStan\Rules\Api\GetTemplateTypeRule
	{
		return new PHPStan\Rules\Api\GetTemplateTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0633(): PHPStan\Rules\Api\ApiClassExtendsRule
	{
		return new PHPStan\Rules\Api\ApiClassExtendsRule($this->getService('0170'), $this->getService('reflectionProvider'));
	}


	public function createService0634(): PHPStan\Rules\Api\ApiMethodCallRule
	{
		return new PHPStan\Rules\Api\ApiMethodCallRule($this->getService('0170'));
	}


	public function createService0635(): PHPStan\Rules\Api\ApiStaticCallRule
	{
		return new PHPStan\Rules\Api\ApiStaticCallRule($this->getService('0170'), $this->getService('reflectionProvider'));
	}


	public function createService0636(): PHPStan\Rules\Api\ApiClassImplementsRule
	{
		return new PHPStan\Rules\Api\ApiClassImplementsRule($this->getService('0170'), $this->getService('reflectionProvider'));
	}


	public function createService0637(): PHPStan\Rules\Api\ApiTraitUseRule
	{
		return new PHPStan\Rules\Api\ApiTraitUseRule($this->getService('0170'), $this->getService('reflectionProvider'));
	}


	public function createService0638(): PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule
	{
		return new PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule($this->getService('0170'));
	}


	public function createService0639(): PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule
	{
		return new PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule;
	}


	public function createService0640(): PHPStan\Rules\Api\ApiInstanceofRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofRule($this->getService('0170'), $this->getService('reflectionProvider'));
	}


	public function createService0641(): PHPStan\Rules\Exceptions\NoncapturingCatchRule
	{
		return new PHPStan\Rules\Exceptions\NoncapturingCatchRule;
	}


	public function createService0642(): PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0643(): PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0644(): PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule
	{
		return new PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule($this->getService('exceptionTypeResolver'), true);
	}


	public function createService0645(): PHPStan\Rules\Exceptions\ThrowExprTypeRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExprTypeRule($this->getService('0129'));
	}


	public function createService0646(): PHPStan\Rules\Exceptions\ThrowExpressionRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExpressionRule($this->getService('0377'));
	}


	public function createService0647(): PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0648(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			true,
			true
		);
	}


	public function createService0649(): PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule
	{
		return new PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule;
	}


	public function createService0650(): PHPStan\Rules\Names\UsedNamesRule
	{
		return new PHPStan\Rules\Names\UsedNamesRule;
	}


	public function createService0651(): PHPStan\Rules\Traits\ConflictingTraitConstantsRule
	{
		return new PHPStan\Rules\Traits\ConflictingTraitConstantsRule($this->getService('07'), $this->getService('reflectionProvider'));
	}


	public function createService0652(): PHPStan\Rules\Traits\TraitAttributesRule
	{
		return new PHPStan\Rules\Traits\TraitAttributesRule($this->getService('0123'), $this->getService('0377'));
	}


	public function createService0653(): PHPStan\Rules\Traits\ConstantsInTraitsRule
	{
		return new PHPStan\Rules\Traits\ConstantsInTraitsRule($this->getService('0377'));
	}


	public function createService0654(): PHPStan\Rules\Traits\NotAnalysedTraitRule
	{
		return new PHPStan\Rules\Traits\NotAnalysedTraitRule;
	}


	public function createService0655(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(false, true);
	}


	public function createService0656(): PHPStan\Rules\Arrays\OffsetAccessAssignOpRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignOpRule($this->getService('0129'));
	}


	public function createService0657(): PHPStan\Rules\Arrays\DeadForeachRule
	{
		return new PHPStan\Rules\Arrays\DeadForeachRule;
	}


	public function createService0658(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule($this->getService('0129'), $this->getService('0377'), false);
	}


	public function createService0659(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createService0660(): PHPStan\Rules\Arrays\UnpackIterableInArrayRule
	{
		return new PHPStan\Rules\Arrays\UnpackIterableInArrayRule($this->getService('0129'));
	}


	public function createService0661(): PHPStan\Rules\Arrays\IterableInForeachRule
	{
		return new PHPStan\Rules\Arrays\IterableInForeachRule($this->getService('0129'));
	}


	public function createService0662(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule($this->getService('0129'), $this->getService('0377'));
	}


	public function createService0663(): PHPStan\Rules\Arrays\ArrayDestructuringRule
	{
		return new PHPStan\Rules\Arrays\ArrayDestructuringRule($this->getService('0129'), $this->getService('0180'));
	}


	public function createService0664(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule(
			$this->getService('0129'),
			$this->getService('0180'),
			false
		);
	}


	public function createService0665(): PHPStan\Rules\Arrays\ArrayUnpackingRule
	{
		return new PHPStan\Rules\Arrays\ArrayUnpackingRule($this->getService('0377'), $this->getService('0129'));
	}


	public function createService0666(): PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule($this->getService('0129'));
	}


	public function createService0667(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('070'));
	}


	public function createService0668(): PHPStan\Rules\Arrays\OffsetAccessAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignmentRule($this->getService('0129'));
	}


	public function createService0669(): PHPStan\Rules\Ignore\IgnoreParseErrorRule
	{
		return new PHPStan\Rules\Ignore\IgnoreParseErrorRule;
	}


	public function createService0670(): PHPStan\Rules\EnumCases\EnumCaseAttributesRule
	{
		return new PHPStan\Rules\EnumCases\EnumCaseAttributesRule($this->getService('0123'));
	}


	public function createService0671(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createService0672(): PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector;
	}


	public function createService0673(): PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector;
	}


	public function createService0674(): PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector;
	}


	public function createService0675(): PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector($this->getService('reflectionProvider'));
	}


	public function createService0676(): PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector;
	}


	public function createService0677(): PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector;
	}


	public function createService0678(): PHPStan\Rules\DeadCode\PossiblyPureNewCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureNewCollector($this->getService('reflectionProvider'));
	}


	public function createService0679(): PHPStan\Rules\Traits\TraitDeclarationCollector
	{
		return new PHPStan\Rules\Traits\TraitDeclarationCollector;
	}


	public function createService0680(): PHPStan\Rules\Traits\TraitUseCollector
	{
		return new PHPStan\Rules\Traits\TraitUseCollector;
	}


	public function createService0681(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService0682(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(options: ['preserveOriginalNames' => true]);
	}


	public function createService0683(): PHPStan\PhpDocParser\ParserConfig
	{
		return new PHPStan\PhpDocParser\ParserConfig(['lines' => true]);
	}


	public function createService0684(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer($this->getService('0683'));
	}


	public function createService0685(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('0683'), $this->getService('0686'));
	}


	public function createService0686(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser($this->getService('0683'));
	}


	public function createService0687(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser(
			$this->getService('0683'),
			$this->getService('0685'),
			$this->getService('0686')
		);
	}


	public function createService0688(): PHPStan\PhpDocParser\Printer\Printer
	{
		return new PHPStan\PhpDocParser\Printer\Printer;
	}


	public function createService0689(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('015')->create();
	}


	public function createService0690(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return $this->getService('014')->create();
	}


	public function createService0691(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('02'));
	}


	public function createService0692(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService0693(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('057'),
			$this->getService('055'),
			$this->getService('0384'),
			$this->getService('0106'),
			$this->getService('023'),
			$this->getService('0694'),
			$this->getService('0695'),
			$this->getService('010'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('028'),
			$this->getService('0360'),
			$this->getService('024'),
			false
		);
	}


	public function createService0694(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService0695(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService0696(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			['stdClass'],
			$this->getService('0695')
		);
	}


	public function createService0697(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService0698(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService0699(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService0700(): PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension;
	}


	public function createService0701(): PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension;
	}


	public function createService0702(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule($this->getService('0137'), false, false);
	}


	public function createService0703(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0704(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0705(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0706(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0707(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0708(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('0377'), 'DateTime');
	}


	public function createService0709(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('0377'), 'DateTimeImmutable');
	}


	public function createService0710(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('0377'),
			'PHPStan\Reflection\ClassReflection',
			'getNativeReflection'
		);
	}


	public function createService0711(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('0377'),
			'PHPStan\Reflection\Php\BuiltinMethodReflection',
			'getDeclaringClass'
		);
	}


	public function createService0712(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('0377'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumBackedCase'
		);
	}


	public function createService0713(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('0377'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumUnitCase'
		);
	}


	public function createService0714(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('0174'));
	}


	public function createService0715(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('0174'));
	}


	public function createService0716(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule($this->getService('0174'));
	}


	public function createService0717(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('025'));
	}


	public function createService0718(): PHPStan\Rules\Exceptions\MethodThrowTypeCovarianceRule
	{
		return new PHPStan\Rules\Exceptions\MethodThrowTypeCovarianceRule($this->getService('0137'), true);
	}


	public function createService0719(): PHPStan\Rules\Classes\NewStaticInAbstractClassStaticMethodRule
	{
		return new PHPStan\Rules\Classes\NewStaticInAbstractClassStaticMethodRule;
	}


	public function createService0720(): PHPStan\Rules\InternalTag\RestrictedInternalClassConstantUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalClassConstantUsageExtension($this->getService('0178'));
	}


	public function createService0721(): PHPStan\Rules\InternalTag\RestrictedInternalClassNameUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalClassNameUsageExtension($this->getService('0178'));
	}


	public function createService0722(): PHPStan\Rules\InternalTag\RestrictedInternalFunctionUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalFunctionUsageExtension($this->getService('0178'));
	}


	public function createService0723(): PHPStan\Rules\Variables\AssignToByRefExprFromForeachRule
	{
		return new PHPStan\Rules\Variables\AssignToByRefExprFromForeachRule($this->getService('070'));
	}


	public function createService0724(): PHPStan\Rules\InternalTag\RestrictedInternalPropertyUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalPropertyUsageExtension($this->getService('0178'));
	}


	public function createService0725(): PHPStan\Rules\InternalTag\RestrictedInternalMethodUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalMethodUsageExtension($this->getService('0178'));
	}


	public function createService0726(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('0172'));
	}


	public function createService0727(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule(
			$this->getService('0360'),
			$this->getService('0172'),
			false,
			false
		);
	}


	public function createService0728(): PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule($this->getService('0172'), false);
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('028'),
			$this->getService('07'),
			$this->getService('0363'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0360'),
			$this->getService('0106'),
			$this->getService('023'),
			$this->getService('0377'),
			$this->getService('012'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0385'),
			$this->getService('relativePathHelper'),
			$this->getService('068'),
			$this->getService('05'),
			$this->getService('0689'),
			$this->getService('010'),
			$this->getService('024'),
			['stdClass']
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('originalBetterReflectionReflector'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('016')->create();
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/Users/didou/dev/machour/clictopay/build/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_e5800887a9
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('076')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\ParserAbstract
	{
		return $this->getService('currentPhpVersionPhpParserFactory')->create();
	}


	public function createServiceCurrentPhpVersionPhpParserFactory(): PHPStan\Parser\PhpParserFactory
	{
		return new PHPStan\Parser\PhpParserFactory($this->getService('currentPhpVersionLexer'), $this->getService('0377'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('0682'),
			$this->getService('0365'),
			$this->getService('060')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('0682'),
			$this->getService('085'),
			$this->getService('072')
		);
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'), $this->getService('0377'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 256);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter(
			$this->getService('relativePathHelper'),
			$this->getService('simpleRelativePathHelper'),
			$this->getService('067'),
			true,
			null,
			null
		);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('0173');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('04')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('04')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderAnalyse'), $this->getService('05'), ['php']);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderScan'), $this->getService('05'), ['php']);
	}


	public function createServiceFreshStubParser(): PHPStan\Parser\StubParser
	{
		return new PHPStan\Parser\StubParser($this->getService('php8PhpParser'), $this->getService('0682'));
	}


	public function createServiceNodeScopeResolverReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return $this->getService('betterReflectionReflector');
	}


	public function createServiceOriginalBetterReflectionReflector(): PHPStan\BetterReflection\Reflector\DefaultReflector
	{
		return new PHPStan\BetterReflection\Reflector\DefaultReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/Users/didou/dev/machour/clictopay');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('05'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser'),
			$this->getParameter('singleReflectionFile')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return $this->getService('076')->createEmulative();
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser(
			$this->getService('php8PhpParser'),
			$this->getService('0682'),
			$this->getService('085'),
			$this->getService('072')
		);
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php8
	{
		return new PhpParser\Parser\Php8($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServicePhpstanDiagnoseExtension(): PHPStan\Diagnose\PHPStanDiagnoseExtension
	{
		return new PHPStan\Diagnose\PHPStanDiagnoseExtension(
			$this->getService('0377'),
			null,
			$this->getService('05'),
			['/Users/didou/dev/machour/clictopay'],
			[
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/Users/didou/dev/machour/clictopay/phpstan.neon',
			],
			$this->getService('0378')
		);
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory($this->getService('betterReflectionProvider'));
	}


	public function createServiceRegistry(): PHPStan\Rules\LazyRegistry
	{
		return new PHPStan\Rules\LazyRegistry($this->getService('0365'));
	}


	public function createServiceRelativePathHelper(): PHPStan\File\FuzzyRelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/Users/didou/dev/machour/clictopay',
			$this->getParameter('analysedPaths')
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\SimpleRelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/Users/didou/dev/machour/clictopay');
	}


	public function createServiceStubFileTypeMapper(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('028'),
			$this->getService('stubParser'),
			$this->getService('0103'),
			$this->getService('095'),
			$this->getService('068'),
			$this->getService('05')
		);
	}


	public function createServiceStubParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('freshStubParser'), 256);
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('stubParser'),
			$this->getService('stubFileTypeMapper'),
			$this->getService('0101')
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('0365'));
	}


	public function initialize(): void
	{
	}


	protected function getStaticParameters(): array
	{
		return [
			'bootstrapFiles' => [
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
			],
			'excludePaths' => ['analyseAndScan' => [], 'analyse' => []],
			'level' => 5,
			'paths' => ['/Users/didou/dev/machour/clictopay/src'],
			'exceptions' => [
				'implicitThrows' => true,
				'reportUncheckedExceptionDeadCatch' => true,
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => [
					'missingCheckedExceptionInThrows' => false,
					'tooWideThrowType' => true,
					'tooWideImplicitThrowType' => false,
					'throwTypeCovariance' => false,
				],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'checkNonStringableDynamicAccess' => false,
				'checkParameterCastableToNumberFunctions' => false,
				'skipCheckGenericClasses' => ['DOMNamedNodeMap'],
				'stricterFunctionMap' => false,
				'reportPreciseLineForUnusedFunctionParameter' => false,
				'checkPrintfParameterTypes' => false,
				'internalTag' => false,
				'newStaticInAbstractClassStaticMethod' => false,
				'checkExtensionsForComparisonOperators' => false,
				'reportTooWideBool' => false,
				'rawMessageInBaseline' => false,
				'reportNestedTooWideType' => false,
				'assignToByRefForeachExpr' => false,
				'curlSetOptArrayTypes' => false,
			],
			'fileExtensions' => ['php'],
			'checkAdvancedIsset' => true,
			'reportAlwaysTrueInLastCondition' => false,
			'checkClassCaseSensitivity' => true,
			'checkExplicitMixed' => false,
			'checkImplicitMixed' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => true,
			'checkNullables' => false,
			'checkThisOnly' => false,
			'checkUnionTypes' => false,
			'checkBenevolentUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => true,
			'checkPhpDocMethodSignatures' => true,
			'checkExtraArguments' => true,
			'checkMissingTypehints' => false,
			'checkTooWideParameterOutInProtectedAndPublicMethods' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkTooWideThrowTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'checkDynamicProperties' => false,
			'strictRulesInstalled' => false,
			'deprecationRulesInstalled' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'checkStrictPrintfPlaceholderTypes' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'reportWrongPhpDocTypeInVarTag' => false,
			'reportAnyTypeWideningInVarTag' => false,
			'reportPossiblyNonexistentGeneralArrayOffset' => false,
			'reportPossiblyNonexistentConstantArrayOffset' => false,
			'checkMissingOverrideMethodAttribute' => false,
			'checkMissingOverridePropertyAttribute' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteScopeWithBlock' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'usePathConstantsAsConstantString' => false,
			'rememberPossiblyImpureFunctionValues' => true,
			'tips' => ['discoveringSymbols' => true, 'treatPhpDocTypesAsCertain' => true],
			'tipsOfTheDay' => true,
			'reportMagicMethods' => true,
			'reportMagicProperties' => true,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByStringCountMax' => 256],
			'reportUnmatchedIgnoredErrors' => true,
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'stubFiles' => [
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/Countable.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/file.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/stream_socket_client.stub',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/stubs/stream_socket_server.stub',
			],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'resultCachePath' => '/Users/didou/dev/machour/clictopay/build/phpstan/resultCache.php',
			'resultCacheSkipIfOlderThanDays' => 7,
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'Memcached::HAVE_ENCODING',
				'Memcached::HAVE_IGBINARY',
				'Memcached::HAVE_JSON',
				'Memcached::HAVE_MSGPACK',
				'Memcached::HAVE_SASL',
				'Memcached::HAVE_SESSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
				'E_ALL',
			],
			'customRulesetUsed' => false,
			'editorUrl' => null,
			'editorUrlTitle' => null,
			'errorFormat' => null,
			'sourceLocatorPlaygroundMode' => false,
			'__validate' => true,
			'parametersNotInvalidatingCache' => [
				['parameters', 'editorUrl'],
				['parameters', 'editorUrlTitle'],
				['parameters', 'errorFormat'],
				['parameters', 'ignoreErrors'],
				['parameters', 'reportUnmatchedIgnoredErrors'],
				['parameters', 'tipsOfTheDay'],
				['parameters', 'parallel'],
				['parameters', 'internalErrorsCountLimit'],
				['parameters', 'cache'],
				['parameters', 'memoryLimitFile'],
				['parameters', 'pro'],
				'parametersSchema',
			],
			'tmpDir' => '/Users/didou/dev/machour/clictopay/build/phpstan',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/Users/didou/dev/machour/clictopay/build/phpstan',
			'rootDir' => '/Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/Users/didou/dev/machour/clictopay',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => [
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'/Users/didou/dev/machour/clictopay/phpstan.neon',
			],
			'allConfigFiles' => [
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///Users/didou/dev/machour/clictopay/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/Users/didou/dev/machour/clictopay/phpstan.neon',
			],
			'composerAutoloaderProjectPaths' => ['/Users/didou/dev/machour/clictopay'],
			'generateBaselineFile' => null,
			'usedLevel' => '4',
			'cliAutoloadFile' => null,
			'env' => [
				'COMMAND_MODE' => 'unix2003',
				'LC_CTYPE' => 'en_US.UTF-8',
				'SHELL' => '/bin/bash',
				'__CFBundleIdentifier' => 'com.jetbrains.PhpStorm',
				'TMPDIR' => '/var/folders/sl/r8_pmx_s2nj0bh9qrbprhb9r0000gn/T/',
				'XDEBUG_MODE' => 'off',
				'HOME' => '/Users/didou',
				'SSH_AUTH_SOCK' => '/private/tmp/com.apple.launchd.DWyGlk1wW4/Listeners',
				'PATH' => '/usr/local/bin:/System/Cryptexes/App/usr/bin:/usr/bin:/bin:/usr/sbin:/sbin:/var/run/com.apple.security.cryptexd/codex.system/bootstrap/usr/local/bin:/var/run/com.apple.security.cryptexd/codex.system/bootstrap/usr/bin:/var/run/com.apple.security.cryptexd/codex.system/bootstrap/usr/appleinternal/bin:/opt/pmk/env/global/bin:/Library/Apple/usr/bin:/Users/didou/.lmstudio/bin',
				'XPC_SERVICE_NAME' => '0',
				'LOGNAME' => 'didou',
				'USER' => 'didou',
				'OSLogRateLimit' => '64',
				'XPC_FLAGS' => '0x0',
				'__CF_USER_TEXT_ENCODING' => '0x1F5:0x0:0x0',
				'PWD' => '/Users/didou/dev/machour/clictopay',
				'LINES' => '50',
				'COLUMNS' => '80',
				'SHELL_VERBOSITY' => '0',
			],
		];
	}


	protected function getDynamicParameter($key)
	{
		switch (true) {
			case $key === 'singleReflectionFile': return null;
			case $key === 'singleReflectionInsteadOfFile': return null;
			case $key === 'analysedPaths': return null;
			case $key === 'analysedPathsFromConfig': return null;
			case $key === 'sysGetTempDir': return sys_get_temp_dir();
			case $key === 'pro': return [
			'dnsServers' => ['1.1.1.2'],
			'tmpDir' => ($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
		];
			default: return parent::getDynamicParameter($key);
		};
	}


	public function getParameters(): array
	{
		array_map(function ($key) { $this->getParameter($key); }, [
			'singleReflectionFile',
			'singleReflectionInsteadOfFile',
			'analysedPaths',
			'analysedPathsFromConfig',
			'sysGetTempDir',
			'pro',
		]);
		return parent::getParameters();
	}
}
