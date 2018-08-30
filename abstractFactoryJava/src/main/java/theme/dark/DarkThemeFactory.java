package theme.dark;

import theme.DialogInterface;
import theme.FooterInterface;
import theme.ThemeFactory;
import theme.ToolbarInterface;

/**
 * This class is responsible of the dark theme components creation.
 */
public class DarkThemeFactory extends ThemeFactory {

    /**
     * {@inheritDoc}
     */
    public DialogInterface createDialog() {
        return new DarkDialog();
    }

    /**
     * {@inheritDoc}
     */
    public ToolbarInterface createToolbar() {
        return new DarkToolbar();
    }


    /**
     * {@inheritDoc}
     */
    public FooterInterface createFooter() {
        return new DarkFooter();
    }
}
